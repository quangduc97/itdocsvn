@extends('backend.master.master')
@section('title','Thêm sản phẩm')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bài viết</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm bài viết</div>
					<div class="panel-body">
						@include('errors.note')
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tiêu đề</label>
										<input required type="text" name="title" class="form-control">
									</div>
									<div class="form-group" >
										<label>Tóm tắt</label>
										<input required type="text" name="summary" class="form-control">
									</div>
									<div class="form-group" >
										<label>Ảnh bìa</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
									</div>
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea class="ckeditor" required name="content"></textarea>
										<script type="text/javascript">
											var editor = CKEDITOR.replace('content',{
												language:'vi',
												filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl: '../../public/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="type" class="form-control">
										@foreach ($type as $type)
											<option value="{{$type->type_id}}">{{$type->type_name}}</option>
										@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Tin nỗi bật/thường</label><br>
										Thường: <input type="radio" name="featured" value="1">
										Nỗi bật: <input type="radio" checked name="featured" value="0">
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{asset('admin/news')}}" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							@include('errors.note')
							{{ csrf_field() }}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection
	
