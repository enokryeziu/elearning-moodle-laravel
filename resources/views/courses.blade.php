
@extends('layouts.template')

@section('content')
@auth
@if(Request::segment(3) != ($userId =Auth::user()->id))
@php
$url = route('enrollments.show', ['course_id' => $course->id, 'student_id' => $userId]);
@endphp
<script>window.location.href = "@php echo $url @endphp";</script>
@endif
@endauth
@if(isset($course) & isset($enroll))
<br>
<div class="row">
    <div class="col-md-2 sidebar">
        <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Export</a></li>
            <li><a href="">Announcements</a></li>
            <li><a href="">Assignments</a></li>
            <li><a href="">Discussions</a></li>
            <li><a href="">Grades</a></li>
            <li><a href="">People</a></li>
            <li><a href="">Pages</a></li>
            <li><a href="">Files</a></li>
            <li><a href="">Syllabus</a></li>
            <li><a href="">Outcomes</a></li>
            <li><a href="">Quizzes</a></li>
            <li><a href="">Modules</a></li>
            <li><a href="">Conference</a></li>
            <li><a href="">Collaborations</a></li>
        </ul><br><br>
        <div class="teacherProfile">
            <div class="tpHeader">
                <img src="{{asset("images/man-user (1).png")}}" alt="Edmond Jahjaga" style="width:40px;">
                <h5>Edmond <br><b>Jahjaga</b></h5>
            </div>
            <div class="tpBody"><br><br>
                <ul>
                    <li><span>Joining Date</span><div>24 August</div></li>
                    <li><span>Departament</span><div>CSE</div></li>
                    <li><span>Category</span><div>Teaching staff</div></li>
                    <li><span>Email</span><div>-</div></li>
                    <li><span>Status</span><div>Active</div></li>
                    <li><span>Qualification</span><div>Phd</div></li>
                </ul>
            </div>
            <div class="tpFooter">
                <p>Last Active: 1h ago</p>
            </div>
        </div>
    </div>
    <div class="col-md-10 main">
        <div class="card">
            <h5 class="card-header">{{ $course->name }}</h5>
            <div class="card-body">
                @foreach ($subjects as $subject)
                <div class="card">
                    <h5 class="card-header">{{$subject->title}}</h5>
                    <div class="card-body">
                        <p class="card-text">{{$subject->description}}</p>
                        
                        <div class="download-lecture">
                            <img class="pdf-icon" src="{{asset('images/pdf.png')}}" alt="PDF Image Cap">
                            <a href="www.google.com">Download Lecture(PDF)</a>
                            <img class="video-lecture-pic" src="{{asset('images/play-button.png')}}" alt="MP4 Video Cap">
                            <a href="www.google.com">Download Lecture(.MP4)</a>
                        
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Upload File
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Upload Box</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                                <form action="{{URL::previous()}}" enctype="multipart/form-data" method="post">
                                                    <span><i class="fas fa-upload ml-3" aria-hidden="true"></i></span>
                                                    <input type="file" name="file">
                                                
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </form>
                        </div>
                    </div>
                    
                    </div>
                    <a href="{{route('subjects.edit',$subject->id)}}" class="btn btn-secondary">EDIT</a>
                  </div><br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@else 
<br>
<div class="disableContent">
    <div class="row">
        <div class="col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Export</a></li>
                <li><a href="">Announcements</a></li>
                <li><a href="">Assignments</a></li>
                <li><a href="">Discussions</a></li>
                <li><a href="">Grades</a></li>
                <li><a href="">People</a></li>
                <li><a href="">Pages</a></li>
                <li><a href="">Files</a></li>
                <li><a href="">Syllabus</a></li>
                <li><a href="">Outcomes</a></li>
                <li><a href="">Quizzes</a></li>
                <li><a href="">Modules</a></li>
                <li><a href="">Conference</a></li>
                <li><a href="">Collaborations</a></li>
            </ul><br><br>
            <div class="teacherProfile">
                <div class="tpHeader">
                    <img src="{{asset("images/man-user (1).png")}}" alt="Edmond Jahjaga" style="width:40px;">
                    <h5>Edmond <br><b>Jahjaga</b></h5>
                </div>
                <div class="tpBody"><br><br>
                    <ul>
                        <li><span>Joining Date</span><div>24 August</div></li>
                        <li><span>Departament</span><div>CSE</div></li>
                        <li><span>Category</span><div>Teaching staff</div></li>
                        <li><span>Email</span><div>-</div></li>
                        <li><span>Status</span><div>Active</div></li>
                        <li><span>Qualification</span><div>Phd</div></li>
                    </ul>
                </div>
                <div class="tpFooter">
                    <p>Last Active: 1h ago</p>
                </div>
            </div>
        </div>
        <div class="col-md-10 main">
            <div class="card">
                <h5 class="card-header">{{ $course->name }}</h5>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">Section 1 - Requirements Elicitation</h5>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <div class="download-lecture">
                                <img class="pdf-icon" src="{{asset('images/pdf.png')}}" alt="PDF Image Cap">
                                <a href="www.google.com">Download Lecture(PDF)</a>
                                <img class="video-lecture-pic" src="{{asset('images/play-button.png')}}" alt="MP4 Video Cap">
                                <a href="www.google.com">Download Lecture(.MP4)</a>
                            </div>
                        </div>
                    </div><br>
                    <div class="card">
                        <h5 class="card-header">Section 2 - Design Phase</h5>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <div class="download-lecture">
                                <img class="pdf-icon" src="{{asset('images/pdf.png')}}" alt="PDF Image Cap">
                                <a href="www.google.com">Download Lecture(PDF)</a>
                                <img class="video-lecture-pic" src="{{asset('images/play-button.png')}}" alt="MP4 Video Cap">
                                <a href="www.google.com">Download Lecture(.MP4)</a>
                            </div>
                        </div>
                    </div><br>
                    <div class="card">
                        <h5 class="card-header">Section 3 - Prototyping</h5>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <div class="download-lecture">
                                <img class="pdf-icon" src="{{asset('images/pdf.png')}}" alt="PDF Image Cap">
                                <a href="www.google.com">Download Lecture(PDF)</a>
                                <img class="video-lecture-pic" src="{{asset('images/play-button.png')}}" alt="MP4 Video Cap">
                                <a href="www.google.com">Download Lecture(.MP4)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="enrollModel">
    <div class="card text-center" style="max-width:550px">
        <div class="card-header">
            Enrollment options
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $course->name }}</h5>
            <p class="card-text" >{{ $course->description }}</p>
            @auth
            <a class="btn btn-primary" href="{{ url('/enroll/' . $course->id . '/' . Auth::user()->id) }}">Enroll me</a>
            @endauth
            @guest
            <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a> or
            @if (Route::has('register'))
            <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            @endguest
        </div>
    </div>
</div>
@endif
@endsection