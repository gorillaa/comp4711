
    {addBtn}
    <h3>Packers Team Roster</h3>
    
    <h3>Choose the ordering:</h3>
    <a href="/playerroster/name">Name</a>
    <a href="/playerroster/number">Jersey Number</a>
    <a href="/playerroster/position">Position</a>
    <br>
    <h3>Choose the layout:</h3>
    <a href="/playerroster/rostergallery">Gallery</a>
    <a href="/playerroster/rostertable">Table</a>
    <br>
    
      
      {roster}
      

      
      <div class="img">
        <a target="_blank" href="{singlecontrol}{number}">
          <img src="/data/{mug}" alt="{name}" width="110">
        </a>
        <div class="desc">Name: {name} Number: {number} Position:{position}</div>
      </div>
      
       {/roster}
       
       <div style="clear: left;">
            <p>{links}</p>
       </div>
   
    


