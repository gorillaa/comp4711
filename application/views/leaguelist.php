<div class="row">
	<h4>AFC Teams</h4>
	<table class="table">
                <tr><th>ID</th><th>Name</th><th>City</th><th>Conference</th><th>Division</th></tr>
		{afcteams}
			<tr><td>{id}</td><td>{name}</td><td>{city}</td><td>{conference}</td><td>{division}</td></tr>
		{/afcteams}
	</table>
	<h4>NFC Teams</h4>
	<table class="table">
                <tr><th>ID</th><th>Name</th><th>City</th><th>Conference</th><th>Division</th></tr>
		{nfcteams}
			<tr><td>{id}</td><td>{name}</td><td>{city}</td><td>{conference}</td><td>{division}</td></tr>
		{/nfcteams}
	</table>
</div>
