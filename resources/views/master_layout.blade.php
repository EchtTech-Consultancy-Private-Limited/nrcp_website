@extends('layouts.main')
@section('title')
    {{ __('National Rabies Control Programme (NRCP)') }}
@endsection
@section('pageTitle')
    {{ __('Home') }}
@endsection
@section('breadcrumbs')
    {{ __($breadcrumbs) }}
@endsection
@section('content')
    <div id="rs-about" class="rs-about style1 pt-80 pb-40 md-pt-70 md-pb-70">
        <div class="container">
            @if (count($objectpass->pageContent) > 0)
                <div class="row">
                    <div class="col-lg-3 col-md-3">

                        <div class="nav flex-column nav-pills" id="tab" role="tablist" aria-orientation="vertical">
                            @if (!empty($commonsideMenu))
                                @if (count($commonsideMenu) > 0)
                                    @foreach ($commonsideMenu as $k => $commonsideMenus)
                                        <a href="{{ url($commonsideMenus->url) }}"
                                            @if (request()->path() == $commonsideMenus->url) class="nav-link active" @else class="nav-link" @endif>
                                            @if (Session::get('Lang') == 'hi')
                                                {{ $commonsideMenus->name_hi ?? '' }}
                                            @else
                                                {{ $commonsideMenus->name_en ?? '' }}
                                            @endif
                                        </a>
                                    @endforeach
                                @endif
                            @else
                                @foreach ($objectpass->pageContent as $k => $sidebar)
                                    <button
                                        @if ($k == '0') class="nav-link active" @else class="nav-link" @endif
                                        id="Master_layout_{{ $k }}" data-toggle="pill"
                                        data-target="#master-layout_{{ $k }}" type="button" role="tab"
                                        aria-controls="annual-report" aria-selected="false">

                                        @if (Session::get('Lang') == 'hi')
                                            {{ $sidebar->pageTitle->page_title_en ?? '' }}
                                        @else
                                            {{ $sidebar->pageTitle->page_title_en ?? '' }}
                                        @endif

                                    </button>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="tab-content" id="tabContent">
                            @foreach ($objectpass->pageContent as $k => $sidebar)
                                <div @if ($k == '0') class="tab-pane fade  show active" @else  class="tab-pane fade show " @endif
                                    id="master-layout_{{ $k }}" role="tabpanel"
                                    aria-labelledby="Master_layout_{{ $k }}">
                                    <!-- Content and Images -->
                                    <div class="heading-title">
                                        <h2 class="title">

                                            @if (Session::get('Lang') == 'hi')
                                                {{ $sidebar->pageTitle->page_title_hi ?? '' }}
                                            @else
                                                {{ $sidebar->pageTitle->page_title_en ?? '' }}
                                            @endif

                                        </h2>
                                    </div>
                                    @if (count($sidebar->content_page) > 0)
                                        <section>
                                            <div class="heading-title">
                                            </div>
                                            @foreach ($sidebar->content_page as $page)
                                                <p>
                                                    @if (Session::get('Lang') == 'hi')
                                                        {!! $page->page_content_hi !!}
                                                    @else
                                                        {!! $page->page_content_en !!}
                                                    @endif
                                                </p>
                                            @endforeach
                                        </section>
                                    @endif
                                    @if (count($sidebar->content_gallery) > 0)
                                        <section>
                                            <div class="heading-title">
                                            </div>
                                            <div class="row">
                                                @foreach ($sidebar->content_gallery as $gallery)
                                                    <div class="col-lg-4 col-md-3">
                                                        <div class="event-img">
                                                            <a href="{{ asset('resources/uploads/PageContentGallery/' . $gallery->public_url) }}"
                                                                class="image-link">
                                                                <img src="{{ asset('resources/uploads/PageContentGallery/' . $gallery->public_url) }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </section>
                                    @endif
                                    @if (count($sidebar->content_pdf) > 0)
                                        <!-- Table section -->
                                        <section>
                                            <div class="heading-title table-heading">                                               
                                                <a href="javascript:vopid();" class="readon orange-btn"> Archive </a>
                                            </div>
                                            <div class="table">
                                                <table class="example">
                                                    <thead>
                                                        <tr>
                                                            <th class="title-data">Title</th>
                                                            <th class="date-width">Date</th>
                                                            <th class="download-icon-width">View/Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($sidebar->content_pdf as $pdf)
                                                            <tr>
                                                                <td>{{ $pdf->pdf_title ?? '' }}</td>
                                                                <td class="date-width">
                                                                    {{ date('d F Y', strtotime($pdf->start_date ?? '')) }}
                                                                    </< /td>
                                                                <td class="download-icon-width">
                                                                    <div class="download ">
                                                                        <a href="{{ asset('resources/uploads/PageContentPdf/' . $pdf->public_url) }}"
                                                                            target="_blank"><span
                                                                                class="view">View</span></a>

                                                                        @if ($pdf->file_extension == 'pdf')
                                                                            <i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i>
                                                                        @elseif($pdf->file_extension == 'xlsx' || $pdf->file_extension == 'csv')
                                                                            <i class="fa fa-file-excel-o"
                                                                                aria-hidden="true"></i>
                                                                        @elseif(
                                                                            $pdf->file_extension == 'docx' ||
                                                                                $pdf->file_extension == 'DOCX' ||
                                                                                $pdf->file_extension == 'doc' ||
                                                                                $pdf->file_extension == 'DOC')
                                                                            <i class="fa fa-file-word-o"
                                                                                aria-hidden="true"></i>
                                                                        @else
                                                                            <i class="fa fa-file-pdf-o"
                                                                                aria-hidden="true"></i>
                                                                        @endif
                                                                        <span
                                                                            class="size">({{ $pdf->pdfimage_size ?? '' }})
                                                                        </span>
                                                                        
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @else
                <p>No Content Available!</p>
            @endif
        </div>
    </div>
@endsection
