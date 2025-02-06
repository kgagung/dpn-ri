@extends('landing.article.main')

@section('content')
<!--begin::Layout-->
<div class="d-flex flex-column flex-xl-row">
    <!--begin::Content-->
    <div class="flex-lg-row-fluid me-xl-15">
        <!--begin::Post content-->
        <div class="mb-17">
            <!--begin::Wrapper-->
            <div class="mb-8">
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-6">
                    <!--begin::Item-->
                    <div class="me-9 my-1">
                        <!--begin::Icon-->
                        <i class="ki-outline ki-element-11 text-primary fs-2 me-1"></i>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <span class="fw-bold text-gray-400">{{$articleDate}}</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    {{-- <!--begin::Item-->
                    <div class="me-9 my-1">
                        <!--begin::Icon-->
                        <i class="ki-outline ki-briefcase text-primary fs-2 me-1"></i>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <span class="fw-bold text-gray-400">Announcements</span>
                        <!--begin::Label-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="my-1">
                        <!--begin::Icon-->
                        <i class="ki-outline ki-message-text-2 text-primary fs-2 me-1"></i>
                        <!--end::Icon-->
                        <!--begin::Label-->
                        <span class="fw-bold text-gray-400">24 Comments</span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item--> --}}
                </div>
                <!--end::Info-->
                <!--begin::Title-->
                <a href="#" class="text-dark text-hover-primary fs-2 fw-bold">Admin
                    Panel - How
                    To Get Started Tutorial. Create a customizable SaaS Based
                    applications and
                    solutions
                    <span class="fw-bold text-muted fs-5 ps-1">5 mins
                        read</span></a>
                <!--end::Title-->
                <!--begin::Container-->
                <div class="overlay mt-8">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px"
                        style="background-image:url('assets/media/stock/1600x800/img-1.jpg')">
                    </div>
                    <!--end::Image-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Description-->
            <div class="fs-5 fw-semibold text-gray-600">
                <!--begin::Text-->
                <p class="mb-8">First, a disclaimer – the entire process of
                    writing a blog post
                    often takes more than a couple of hours, even if you can
                    type eighty words
                    per minute and your writing skills are sharp. From the seed
                    of the idea to
                    finally hitting “Publish,” you might spend several days or
                    maybe even a week
                    “writing” a blog post, but it’s important to spend those
                    vital hours
                    planning your post and even thinking about
                    <a href="../../demo55/dist/pages/blog/post.html" class="link-primary pe-1">Your
                        Post</a>(yes, thinking counts as working
                    if you’re a blogger) before you actually write it.
                </p>
                <!--end::Text-->
                <!--begin::Text-->
                <p class="mb-8">There’s an old maxim that states,
                    <span class="text-gray-800 pe-1">“No fun for the writer, no
                        fun for the
                        reader.”</span>No matter what industry you’re working
                    in, as a blogger,
                    you should live and die by this statement.
                </p>
                <!--end::Text-->
                <!--begin::Text-->
                <p class="mb-8">Before you do any of the following steps, be
                    sure to pick a
                    topic that actually interests you. Nothing – and
                    <a href="../../demo55/dist/pages/blog/home.html" class="link-primary pe-1">I
                        mean NOTHING</a>– will kill a blog post more effectively
                    than a lack of
                    enthusiasm from the writer. You can tell when a writer is
                    bored by their
                    subject, and it’s so cringe-worthy it’s a little
                    embarrassing.
                </p>
                <!--end::Text-->
                <!--begin::Text-->
                <p class="mb-17">I can hear your objections already. “But Dan, I
                    have to blog
                    for a cardboard box manufacturing company.” I feel your
                    pain, I really do.
                    During the course of my career, I’ve written content for
                    dozens of clients
                    in some less-than-thrilling industries (such as financial
                    regulatory
                    compliance and corporate housing), but the hallmark of a
                    professional
                    blogger is the ability to write well about any topic, no
                    matter how dry it
                    may be. Blogging is a lot easier, however, if you can muster
                    at least a
                    little enthusiasm for the topic at hand.</p>
                <!--end::Text-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Post content-->
    </div>
    <!--end::Content-->
    <!--begin::Sidebar-->
    <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
        <x-landing.recent-post />
    </div>
    <!--end::Sidebar-->
</div>
<!--end::Layout-->
@endsection