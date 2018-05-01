<div id="reply-{{ $reply->id }}" class="card-header">
	<div class="level">
		<h5 class="flex">
			<a href="{{ route('profiles.show',$reply->owner->name ) }}">
			    {{ $reply->owner->name }}
			</a>
			said {{ $reply->created_at->diffForHumans() }}...
		</h5>

	    <div>
	    	<form method="POST" action="{{ route('favorite.store', $reply->id) }}">
	    		@csrf
	    		<button class="btn btn-default" {{ $reply->isFavorited() ? 'disabled' : '' }}>
	    			{{ $reply->favorites_count }} {{ str_plural('Favorite', $reply->favorites_count) }}
	    		</button>
	    	</form>
	    </div>
	</div>


</div>
<div class="card-body">
    {{ $reply->body }}
</div>
