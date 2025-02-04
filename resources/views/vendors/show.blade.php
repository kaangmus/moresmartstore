@extends('layouts.app')
@section('nav')
    @include('partials.nav')
@endsection

@section('search')
    @include('partials.search')
@endsection

@section('content')

{{-- new post list for mobile--}}
<div class="w-max-full mx-auto">
    <div class="flex ">
        {{-- vendor detail --}}

        <div class="w-full">

            <div class="w-full ">
                @include('partials.headbar',[
                    'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" class="fill-current absolute"><path d="M2 2c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v18l-8-4-8 4V2z"/></svg>',
                    'title' => 'หน้าธุรกิจ',
                    'link' => '/vendors',
                    'linktext' => 'แสดงทั้งหมด'
                ])
            </div>
            <div class="w-full lg:max-w-full mx-auto lg:flex p-4 rounded-lg">
                <div class="h-64 lg:h-auto lg:w-1/2 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-right  overflow-hidden" style="background:url('{{  Storage::url($vendor->imagefile) }}') no-repeat center center/cover" title="{{ $vendor->name }}">

                </div>


                <div class="lg:w-1/2 border-r  border-l border-gray-400 lg:border-r-0 lg:border-l-0 bg-white rounded-b flex flex-1 flex-col justify-between leading-normal ">

                    <div class="mb-4 p-4">
                        <div class="text-gray-900 font-bold text-xl mb-2">{{ $vendor->name }}
                        </div>
                        <div class="flex flex-row">
                            <div class="flex items-center w-1/2">
                                <img class="w-10 h-10 rounded-full mr-2" src="{{  Storage::url($vendor->logofile) }}" alt="{{ $vendor->name }}">
                                <div class="text-sm">
                                    <p class="text-gray-900 leading-none">{{ $vendor->user->name }}</p>
                                    <p class="text-gray-600">{{  $vendor->visits()->count() }} View</p>
                                </div>
                            </div>
                            <div class="w-1/2 text-sm font-thin text-right">
                            <a href="/vendors/type/{{$vendor->businesstype_id}}" class="text-blue-500 hover:text-blue-700">
                               ประเภท: {{$vendor->businesstype->name}}
                            </a>
                            </div>


                        </div>
                        <p class="w-full bg-gray-200 py-2  px-4 text-sm text-gray-600 flex items-center rounded-full mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M5.64 16.36a9 9 0 1 1 12.72 0l-5.65 5.66a1 1 0 0 1-1.42 0l-5.65-5.66zm11.31-1.41a7 7 0 1 0-9.9 0L12 19.9l4.95-4.95zM12 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>
                            <span class=" text-base ml-2">
                                {{$vendor->address}}  {{ $vendor->sub_district}} {{$vendor->district}}
                                {{$vendor->province}}  {{ $vendor->postal_code}}
                            </span>

                        </p>
                        @if(!empty($vendor->phoneno))
                                <div class="p-4">
                                    <a class="text-blue-500 hover:text-blue-700 pl-8" href="tel:{{ $vendor->phoneno }}" >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current absolute" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M13.04 14.69l1.07-2.14a1 1 0 0 1 1.2-.5l6 2A1 1 0 0 1 22 15v5a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2h5a1 1 0 0 1 .95.68l2 6a1 1 0 0 1-.5 1.21L9.3 10.96a10.05 10.05 0 0 0 3.73 3.73zM8.28 4H4v2a14 14 0 0 0 14 14h2v-4.28l-4.5-1.5-1.12 2.26a1 1 0 0 1-1.3.46 12.04 12.04 0 0 1-6.02-6.01 1 1 0 0 1 .46-1.3l2.26-1.14L8.28 4zm7.43 5.7a1 1 0 1 1-1.42-1.4L18.6 4H16a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V5.41l-4.3 4.3z"/>
                                        </svg>
                                        {{ $vendor->phoneno }}
                                    </a>
                                </div>
                            @endif


                    </div>

                    <div class=" flex  flex-row p-4 justify-between bg-gray-300 ">
                            @if(!empty($vendor->weburl))
                                <div class="mr-4 ml-4">
                                    <a class="text-blue-500 hover:text-blue-700" href="{{ $vendor->weburl }}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current absolute" viewBox="0 0 24 24" width="24" height="24"><path d="M8 20H3V10H0L10 0l10 10h-3v10h-5v-6H8v6z"/></svg>
                                        <span class="pl-6">เว็บไซต์</span>

                                    </a>
                                </div>
                            @endif

                            @if(!empty($vendor->email))
                                <div class="mr-4">
                                    <a class="text-blue-500 hover:text-blue-700 pl-8 py-2" href="mailto:{{ $vendor->email }}" >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current absolute" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z"/></svg>
                                    </a>
                                </div>
                            @endif
                            @if(!empty($vendor->facebook))
                                <div class="mr-4">
                                    <a class="text-blue-500 hover:text-blue-700 pl-8 py-2" href="{{ $vendor->facebook}}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current absolute" viewBox="0 0 24 24" width="24" height="24"><path d="M17,1H3C1.9,1,1,1.9,1,3v14c0,1.101,0.9,2,2,2h7v-7H8V9.525h2V7.475c0-2.164,1.212-3.684,3.766-3.684l1.803,0.002v2.605 h-1.197C13.378,6.398,13,7.144,13,7.836v1.69h2.568L15,12h-2v7h4c1.1,0,2-0.899,2-2V3C19,1.9,18.1,1,17,1z"/></svg>
                                    </a>
                                </div>
                            @endif
                            @if(!empty($vendor->line))
                                <div class="mr-4">
                                    @if (substr($vendor->line, 0, 1) == '@')
                                        <a class="text-blue-500 hover:text-blue-700 pl-8 py-2" href="http://line.me/R/ti/p/{{ $vendor->line}}" target="_blank">
                                            <img class="h-8 w-8 fill-current absolute" src="{{  Storage::url('line.svg') }}">
                                        </a>
                                    @else
                                        <a class="text-blue-500 hover:text-blue-700 pl-8 py-2" href="http://line.me/ti/p/~{{ $vendor->line}}" target="_blank">
                                            <img class="h-8 w-8 fill-current absolute" src="{{  Storage::url('line.svg') }}">
                                        </a>
                                    @endif
                                </div>
                            @endif
                        </div>
                </div>

            </div>



            <div class="p-4 mx-4 rounded-lg border bg-white text-right">

                <p class="text-gray-700 text-base text-left mt-2">{{ $vendor->description }}</p>
                <div class="fb-share-button" data-href="{{url('/vendors/{$vendor->id}')}}" data-layout="button_count" data-size="large">
                    <a target="_blank"
                        href="https://www.facebook.com/sharer/sharer.php?u={{url('/vendors/{$vendor->id}')}};src=sdkpreparse"
                        class="fb-xfbml-parse-ignore">
                        แชร์</a>
                </div>
            </div>

            {{-- สินค้า list --}}

                @include('partials.headbar',[
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="fill-current absolute"><path class="heroicon-ui" d="M5 3h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v4h4V5H5zm10-2h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 2v4h4V5h-4zM5 13h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4c0-1.1.9-2 2-2zm0 2v4h4v-4H5zm10-2h4a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4c0-1.1.9-2 2-2zm0 2v4h4v-4h-4z"/></svg>',
                'title' => 'สินค้า',
                'link' => '/products',
                'linktext' => 'สินค้า'
            ])
            @include('products.card',[
                'showimage' => 1
            ])
            <div class="w-full mx-auto p-4">
            {{ $products->links('vendor.pagination.tailwind') }}
            </div>
        </div>

    </div>
</div>


@endsection

@section('footer')
    @include('partials.footer')

@endsection
