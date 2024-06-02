<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="nav-link text-light" href="/">
                    <span>Home</span></a>
    </div>
    <div class="card-footer text-center py-2">
        @auth


        <a class="btn btn-link btn-sm" href="{{route('profile')}}">View Profile </a>
        @endauth
    </div>
</div>
