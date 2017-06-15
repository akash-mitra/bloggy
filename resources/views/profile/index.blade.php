@extends('layouts.app')

@section('aside')
	<div class="p20">
		<div class="topline">
			<h3>Menu</h3>
		</div>

	</div>
@endsection

@section('main')
	<div class="p20">
		<div class="topline">
			<a href="/">Home</a> > <a href="{{route('profile')}}">Profile</a>
		</div>

		<h3 style="line-height: 26px">
			<img src="{{ $user->avatar }}" style="display: block; margin: 0 10px 0 0" align="left">
			{{ $user->name }}	
			<br>
			<small style="margin-top: 0px">Profile Page for {{ $user->name }}</small>
		</h3>
		<hr>
		<h4>Basic Information</h4>
		<hr>
		<table class="timple">
			<tbody>
				@if(! empty($user->name))
				<tr>
					<td><i class="fa fa-fw fa-user-o"></i>&nbsp;Name:</td>
					<td>{{ $user->name }}</td>
					<td><i class="fa fa-eye"></i>&nbsp;</td>
				</tr>
				@endif
				@if(! empty($user->email))
				<tr>
					<td><i class="fa fa-fw fa-envelope-o"></i>&nbsp;Email</td>
					<td>{{ $user->email }}</td>
					<td><i class="fa fa-eye-slash"></i>&nbsp;</td>
				</tr>
				@endif
				@if(! empty($user->type))
				<tr>
					<td><i class="fa fa-fw fa-envelope-o"></i>&nbsp;Type</td>
					<td>{{ $user->type }}</td>
					<td><i class="fa fa-eye-slash"></i>&nbsp;</td>
				</tr>
				@endif
				@if(! empty($user->created_at))
				<tr>
					<td><i class="fa fa-fw fa-calendar-o"></i>&nbsp;Member Since:</td>
					<td>{{ $user->created_at->toFormattedDateString() }}</td>
					<td><i class="fa fa-eye"></i>&nbsp;</td>
				</tr>
				@endif
				@if(! empty($user->updated_at))
				<tr>
					<td><i class="fa fa-fw fa-clock-o"></i>&nbsp;Last updated:</td>
					<td>{{ $user->updated_at->diffForHumans() }}</td>
					<td><i class="fa fa-eye-slash"></i>&nbsp;</td>
				</tr>
				@endif
				
			</tbody>
		</table>

		<p>&nbsp;</p>
		<h4>Articles by {{ $user->name }}</h4>
		<hr>

		@if(count($pages)> 0)
			<table class="timple table">
				<thead>
					<tr><th>#</th><th>Article</th><th>Published</th></tr>
				</thead>
				@foreach($pages as $page)
					<tr>
						<td>
							{{$loop->iteration}}
						</td>
						<td>
							<a href="{{'/' . (empty($page->slug)?'general':$page->slug) . '/' . str_slug($page->id . ' ' . $page->title)}}">
								{{$page->title}}	
							</a>
						</td>
						<td>
							{{ Carbon\Carbon::parse($page->created_at)->format('d-M-Y')}}
						</td>
					</tr>
				@endforeach
			</table>
		@else
			<p>
				{{ $user->name }} has not contributed any article yet.
			</p>
		@endif


		<p>&nbsp;</p>
		<h4>Social Authentication Providers</h4>
		<hr>
		<table class="timple">
			@foreach($user->providers as $social)
				<tr>
					<td>
						<i class="fa fa-fw fa-arrow-circle-o-right"></i>&nbsp;
						{{$social->provider}} User id:
					</td>
					<td>
						{{ $social->provider_user_id }}
					</td>
					<td>Hidden</td>
				</tr>
			@endforeach
			
		</table>
	</div>
	
@endsection