<div class="flex flex-wrap  w-full xl:mx-0 ">
    @foreach ($blogs as $blog)
        <div class="w-full  flex flex-col md:w-1/3 ">
        <a href="/blogs/{{ $blog->slug }}" class="bg-white flex flex-col flex-1 rounded-lg shadow hover:shadow-lg translateY-2px m-4 no-underline transition">
                <div class="aspect-16x9 rounded-t-lg"
                    style="background:url('{{  Storage::url($blog->blog_image) }}') no-repeat center center/cover">
                </div>


                <div class="p-2 flex flex-col flex-1 text-left rounded-b-lg ">
                    <p class="text-base font-semibold text-left text-blue-700 ">{{ $blog->title }} </p>

                    <p> {{Str::of( $blog->blog_content)->limit(250) }} </p>

                </div>
                <div class="p-2 w-full  flex  flex-row bg-gray-200 border-t border-gray-100 text-sm font-thin ">

                    <div class="text-left w-1/2 mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current absolute" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M17.56 17.66a8 8 0 0 1-11.32 0L1.3 12.7a1 1 0 0 1 0-1.42l4.95-4.95a8 8 0 0 1 11.32 0l4.95 4.95a1 1 0 0 1 0 1.42l-4.95 4.95zm-9.9-1.42a6 6 0 0 0 8.48 0L20.38 12l-4.24-4.24a6 6 0 0 0-8.48 0L3.4 12l4.25 4.24zM11.9 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                        <span class="pl-8 py-2">{{  $blog->visits()->count() }} </span>
                    </div>

                    <div class="text-right w-1/2 mt-1">{{ $blog->blog_cat->name }}</div>
                </div>
            </a>
        </div>
    @endforeach
</div>
