@extends("layouts.app")
@section("content")
        <h1>Create review</h1>
        <div id="reviewCreateApp">
            <form id="reviewCreateForm" action="{{ route("reviews.store")  }}" method="post" @submit="save">
                @csrf

                <label for="name">Name</label>
                <input type="text" v-model="name">

                <label for="text">Text</label>
                <input type="text" v-model="text">

                <label for="phone">Phone</label>
                <input type="text" v-model="phone">

                <input type="hidden" name="token" value="{{ csrf_token() }}">

                <input type="submit" value="Create">

            </form>
            <p v-if="status">
                @{{ status }}
            </p>
            <p v-if="errors.length">
                <b>Errors:</b>
                <ul>
                    <li v-for="error in errors">@{{ error }}</li>
                </ul>
            </p>
        </div>
    </div>
        
<script src="{{asset("review.create.js")}}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset("css/review.css")  }}">
@endsection

