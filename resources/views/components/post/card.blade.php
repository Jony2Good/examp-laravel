<div class="col-4 p-3 border">
    <h5><a href="{{ route('blog.show', $item->id )}}">{{ $item->author }}</a></h5>
    <p>{{ $item->content }}</p>
    <div class="d-flex justify-content-between">
        <span>{{ $item->id }}</span>
        <span class="small text-muted">{{ now()->format('d-m-Y') }}</span>
    </div>
</div>
