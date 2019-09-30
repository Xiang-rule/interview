<html>
<head>
	<title>Xiang</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container"><a href="/admin">管理者介面</a>
		<div class="row">
		@foreach($posts as $post)
			<div class="col-md-6">
				<a href="/post/{{ $post->slug }}">
					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
					<span>{{ $post->title }}</span>
				</a>
			</div>
		@endforeach
		</div>
	</div>

</body>
</html>

