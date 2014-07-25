<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<li>
		      	<div class="btn-group">
		      		<button class="btn btn-default navbar-btn"><i class="fa fa-book"></i> {{note.notebook_title}}</button>
		      		<button class="btn btn-default navbar-btn"><i class="fa fa-tags"></i></button>
	      		</div>
	      	</li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      	<li>
		      	<div class="btn-group">
		      		<a href="#/n/{{note.notebook_id}}/{{note.id}}" class="btn btn-success navbar-btn"><i class="fa fa-floppy-o"></i></a>
		      		<a href="#/n/{{note.notebook_id}}/{{note.id}}" class="btn btn-danger navbar-btn"><i class="fa fa-times-circle"></i></a>
	      		</div>
	      	</li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<form role="form">
	<div>
		<div class="page-header"><input type="title" class="form-control" id="title" placeholder="Note title" ng-model="note.title"></div>
		<div class="page-content">
			<textarea id="content" class="form-control" rows="16" ng-model="note.content"></textarea>
		</div>
	</div>
</form>

[[ HTML::script('ckeditor/ckeditor.js') ]]
<script type="text/javascript">
	CKEDITOR.replace('content', {
		fullPage: true,
		allowedContent: true,

	});
</script>