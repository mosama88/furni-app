@extends('layouts.master')
@section('content')
    <!-- End Header/Navigation -->

@section('contact-active', 'active')
@section('hero-title', 'Dispaly Contact')
@section('hero-description',
    'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate
    velit imperdiet dolor tempor tristique.')




    <!-- Start Contact Form -->
    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">

                    {{-- Start Successfull Message --}}
                    <div class="col-md-8 col-lg-8 pb-4">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{-- End Successfull Message --}}
                        <table class="table table-striped">
                            <thead>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Message</th>
                                <th>Category</th>
                            </thead>
                            <tbody>
                                @if (count($contacts) > 0)

                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contacts->firstItem() + $loop->index }}</td>
                                            <td>{{ $contact->fname }}</td>
                                            <td>{{ $contact->lname }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->status }}</td>
                                            <td>{{ Str::limit($contact->message, 10) }}</td>
                                            {{-- in my database there is fields empty so i Use =>(?)=> Meaning  if the value = null Show Data --}}
                                            <td>{{ $contact->category->name }}</td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>

                        {{ $contacts->render('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- End Contact Form -->
@endsection
