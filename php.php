<div class="well well bs-component">
<form class="form-horizontal" method="post" action="/comment">

<p class="alert alert-danger"></p>

<div class="alert alert-success"></div>
<fieldset>
<legend>Reply</legend>
<div class="form-group">
<div class="col-lg-12">
<textarea class="form-control" rows="3" id="content" name="content"></textarea>
</div>
</div>
<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">
<button type="reset" class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-primary">Post</button>
</div>
</div>
</fieldset>
</form>
</div>


    			echo 
    			"
    				<div class='media'>
					<img class='media-object pull-left' src='/bootstrap/images/64.jpg' alt='Media Object'>
					<div class='media-body'>
					<h4 class='media-heading'>Media heading</h4>
					This is some sample text. This is some sample text.
					This is some sample text. This is some sample text.
					This is some sample text. This is some sample text.
					This is some sample text. This is some sample text.
					</div>
					</div>
    			";


<div class="container col-md-8 col-md-offset-2">
<div class="well well bs-component">
<div class="content">
<h2 class="header">{!! $post->title !!}</h2>
<p> {!! $post->content !!} </p>
</div>
<div class="clearfix"></div>
</div>

<div class="well well bs-component">
<div class="content">

</div>
</div>

<div class="well well bs-component">
<form class="form-horizontal" method="post" action="">

<p class="alert alert-danger"></p>

<div class="alert alert-success">

</div>

<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<input type="hidden" name="post_id" value="{!! $post->id !!}">
<input type="hidden" name="post_type" value="App\Post">
<fieldset>
<legend>Comment</legend>

<div class="form-group">
<div class="col-lg-12">
<textarea class="form-control" rows="3" id="content" name="content"></textarea>
</div>
</div>
<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">
<button type="reset" class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-primary">Post</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>    			


echo 
	    			"
	    				<div class='media'>
						<img class='media-object pull-left' src='/bootstrap/images/64.jpg' alt='Media Object'>
						<div class='media-body'>
						<h4 class='media-heading'>".$result['user_id']."</h4>
						".$result['comment']."
						</div>
						</div>
	    			";


<div class="container col-md-8 col-md-offset-2">
<div class="well well bs-component">
<form class="form-horizontal" method="post">

<p class="alert alert-danger">{{ $error }}</p>

<div class="alert alert-success">

</div>

<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<fieldset>
<legend>Create a new category</legend>
<div class="form-group">
<label for="name" class="col-lg-2 control-label">Name</label>
<div class="col-lg-10">
<input type="text" class="form-control" id="name" name="name">
</div>
</div>
<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">
<button type="reset" class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>