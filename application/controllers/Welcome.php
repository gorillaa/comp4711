<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {
	/**
	 * This is the controller for the homepage.
         *
         * @author Luka Bresan, Darnell Andries, Dima Goncharov
	 */
	public function index()
	{
      $this->data['pagebody'] = 'homepage';    // this is the view we want shown
      $teams = $this->team->all();
      $list = array();

	    foreach ($teams as $team) {
	        $list[$team["code"]] = $team["name"];
	    }

	    $this->data['selection'] =  form_dropdown('teams', $list, '', 'id="teams"');

			$this->data['additionalJs'] = '<script src="/assets/js/prediction.js"></script>';
      $this->render();
	}

  public function prediction($teamid) {
			if (count($this->score->getscores($teamid)) < 1) {
					$this->data["error"] = "ERROR: No scores available for team requested.";
					$this->parser->parse('errorview', $this->data);
					return;
			}
			$packersgames = $this->score->getscores('GB');

			$avgsum = 0;
			$avg_opponentsum = 0;
			$avgcount = 0;
			$avg_opponentcount = 0;

			$average1 = -1;
			$average2 = -1;
			$average3 = 0;

			foreach ($packersgames as $game) {

					if ($game->hometeam == 'GB') {
							$win = $game->awayscore < $game->homescore ? 1 : 0;
							if ($game->awayteam == $teamid) {
									$avg_opponentcount++;
									$avg_opponentsum += $win;
							}
					} else if ($game->awayteam == 'GB') {
							$win = $game->awayscore > $game->homescore ? 1 : 0;
							if ($game->hometeam == $teamid) {
									$avg_opponentcount++;
									$avg_opponentsum += $win;
							}
					} else {
							continue;
					}
					$avgcount++;
					$avgsum += $win;
					if ($avgcount == 5) {
							$average2 = $avgsum / $avgcount;
							$winslast = $avgsum;
					}
			}

			if ($average2 == -1) {
					$average2 = $avgsum / $avgcount;
					$winslast = $avgsum;
			}

			$average1 = $avgsum / $avgcount;

			if ($avg_opponentcount > 0) {
					$average3 = $avg_opponentsum / $avg_opponentcount;
			}

			$prediction = (0.7 * $average1) + (0.2 * $average2) + (0.1 * $average3);

			if ($avg_opponentcount == 0) {
					$prediction = $prediction / 0.9;
			}

			$prediction = round($prediction * 100, 2);

			$this->data["totalgames"] = $avgcount;
			$this->data["gamewins"] = $avgsum;
			$this->data["gamewinslast"] = $winslast;
			$this->data["oppgamewins"] = $avg_opponentsum;
			$this->data["oppgames"] = $avg_opponentcount;
			$this->data["average"] = $average1;
			$this->data["fivegames"] = $average2;
			$this->data["oppavg"] = $average3;
			$this->data["prediction"] = $prediction;
			$this->parser->parse('predictionview', $this->data);
  }
}
