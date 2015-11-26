<div>
    
    <h3>Packers Team Roster</h3>

    {addBtn}
    <h3>Choose the ordering:</h3>
    <a href="/playerroster/name">Name</a>
    <a href="/playerroster/number">Jersey Number</a>
    <a href="/playerroster/position">Position</a>
    <br>
    <h3>Choose the layout:</h3>
    <a href="/playerroster/rostergallery">Gallery</a>
    <a href="/playerroster/rostertable">Table</a>
    <br>
    
      
      <table style="width:100%">
        
        <tr>
        <th style="text-align:left">Mugshot</th>
        <th style="text-align:left">Number</th>
        <th style="text-align:left">Name</th> 
        <th style="text-align:left">Position</th>
        <th style="text-align:left">Height</th>
        <th style="text-align:left">Weight</th> 
        <th style="text-align:left">Age</th>
        <th style="text-align:left">Exp</th>
      </tr>
      {roster}
      
      <tr >
        <td><img src="/data/{mug}" title="{name}" style="width:100px;"/></td>
        <td>{number}</td>
        <td><a href="{singlecontrol}{number}">{name}</a></td> 
        <td>{position}</td>
        <td>{height}</td>
        <td>{weight}</td> 
        <td>{age}</td>
        <td>{exp}</td>
      </tr>
      {/roster}
      </table>
    
	<nav>
	  <ul class="pagination">
		{links}
	  </ul>
	</nav>
    
    
</div>
