@extends('layouts.admin')

@section('aside')
	@include('partials.admin.menu')
@endsection

@section('header')
	@include('partials.category.breadcrumb')
@endsection

@section('main')
	
	<div class="row">
		<div class="col-md-12">
			@include('partials.admin.header', [
				'headerText' => 'Edit Category'
			])		
		</div>
	</div>
	

	<div class="row mb-5">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<form method="post" action="{{route('category-save')}}" id="frm-edit">
						{{ method_field('patch') }}
						@include('partials.category.form')
					</form>
				</div>
			</div>
		</div>
	</div>
	
@endsection


@section('page.script')
	<script>
		// for submit handling
		$('#btn-submit').click (function () {
			if (validate('#frm-edit')) 
				$('#frm-edit').submit();
		});

		// handles the close button by redirecting
		// the page to the category list 
		$('#btn-close').click (function () {
			location.href = "{{route('category-index')}}";
		});

		// This code generates the Slug as and when category
		// name is typed out
		$('#inputTitle').keyup(function () {
			let url = $('#inputTitle').val();
			$('#inputUrl').val(url.toLowerCase().replace(/ /g, '-')); 
		});

		$(document).ready(function () {

			// populate the category drop-down with list of all
			// available categories. An array of exclusion list
			// id is provided as the last parameter to exclude
			// its own category to appear as parent in 
			// the dropdown list
			populateSelect ('#inputCat', 
				'{{route("api-categories")}}',
				{"key": "record", "value":"label"},
				'{{$category->parent_id}}', 
				[{{$category->id}}]); // exclusion list

			// if the parent category id is blank in the database
			// the same is represented as "--" in front-end	
			let blankChoice = false;
			@if(empty($category->parent_id))	
				blankChoice = true;
			@endif

			// add one aadditional record for blank category "--"
			$('#inputCat').append($('<option>', {
				    value: '',
				    text: '--',
				    selected: blankChoice
			}));

			
		});

	</script>
@endsection