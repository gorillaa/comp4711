<div class="row">
    
    <h3>Packers Team Roster</h3>
    
    <h3>Choose the ordering:</h3>
    <a href="/playerroster/name">Name</a>
    <a href="/playerroster/number">Jersey Number</a>
    <a href="/playerroster/position">Position</a>
   
    
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
        <td>{name}</td> 
        <td>{position}</td>
        <td>{height}</td>
        <td>{weight}</td> 
        <td>{age}</td>
        <td>{exp}</td>
      </tr>
      {/roster}
      </table>
    
    <p>{links}</p>
    
    
</div>
