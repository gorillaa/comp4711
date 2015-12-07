<div class="row">
	<div class="col-md-4">
		<form>
			<label for="groupSelect">Group</label>
			<select id="groupSelect" name="groupSelect" class="form-control" onchange="this.form.submit()">
				<option value="conference" {grp_conference} >Conference</option>
				<option value="league"{grp_league}>League</option>
				<option value="division"{grp_division}>Division</option>
			</select>
			<label for="orderSelect">Order</label>
			<select id="orderSelect" name="orderSelect" class="form-control" onchange="this.form.submit()">
				<option value="code"{ord_code}>By Team Code</option>
				<option value="name"{ord_name}>By Location/Team Name</option>
				<option value="netPts"{ord_netPts}>By Standing</option>
			</select>

		</form>
	</div>
	<div class="col-md-12">
		{league_tables}
			<h4>{title}</h4>
			<table class="table">
				<tr><th>Code</th><th>Name</th><th>Conference</th><th>Division</th><th>Net Pts</th><th>Pts. For</th><th>Pts. Against</th><th>Home</th><th>Road</th></tr>
				{teams}
					<tr><td>{code}</td><td>{name}</td><td>{conference}</td><td>{division}</td><td>{netPts}</td><td>{ptsFor}</td><td>{ptsAgainst}</td><td>{home}</td><td>{road}</td></tr>
				{/teams}
			</table>
		{/league_tables}
	</div>
</div>
