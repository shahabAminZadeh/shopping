@extends('admin.master.master')
@section('main_content')
    <div class="card-body table-responsive p-0">
        <h4 style="margin-right: 50px;margin-top: 20px;margin-bottom: 20px;color: #4d4d4c;">همه دسته بندی ها</h4>
        <table class="table table-hover">
            <tbody><tr>
                <th></th>
                <th> آیدی دسته بندی </th>
                <th>  موضوع دسته بندی </th>

                <th> اقدامات <a   style="margin-right: 60px;text-align: left" class="btn btn-success" href="{{route('ُCategoryBlogCreate')}}">افزودن دسته بندی ها</a>    </th>

            </tr>
            @foreach($categories as $key=>$category)
                <tr>
                    <td></td>
                    <td>{{$key+1}}</td>
                    <td>{{$category->category_name}}</td>

                    <td class="d-flex">
                        <a href="{{route('ُCategoryBlogEdit',['C_blog'=>$category->id])}}" class="btn btn-sm btn-info"> ویرایش </a>
                        <a style="background-color: mediumvioletred;margin-right: 10px" id="delete" href="{{route('ُCategoryBlogDestroy',['C_blog'=>$category->id])}}" class="btn btn-sm btn-info"> حذف </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td> آیدی دسته بندی </td>
                <td>  موضوع دسته بندی </td>
                <td> اقدامات </td>
            </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('admin/dist/js/code.js')}}"></script>

@endsection
