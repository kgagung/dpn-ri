<!--begin::Recent posts-->
<div class="m-0">
    <h4 class="text-dark mb-7">Recent Posts</h4>

    @foreach($recentPosts as $post)
    <div class="d-flex flex-stack mb-7">
        <!--begin::Symbol-->
        <div class="symbol symbol-60px symbol-2by3 me-4">
            <div class="symbol-label" style="background-image: url('{{ $post['image'] }}')">
            </div>
        </div>
        <!--end::Symbol-->

        <!--begin::Title-->
        <div class="m-0">
            <a href="{{ route('news.show', $post['slug']) }}" class="text-dark fw-bold text-hover-primary fs-6">
                {{ $post['title'] }}
            </a>
            <span class="text-gray-600 fw-semibold d-block pt-1 fs-7">
                {{ $post['snippet'] }}
            </span>
        </div>
        <!--end::Title-->
    </div>
    @endforeach
</div>
<!--end::Recent posts-->