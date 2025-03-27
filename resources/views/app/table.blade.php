@extends('layouts.app')

@section('pagename', 'Table')

@section('content')
    <div class="bx-pull-right mb-2">
        <a href="" class="btn btn-outline-primary">
            <i class="bx bx-plus mr-2"></i> Add Data
        </a>
    </div>
    <table class="table thead-light">
        <thead class="table-dark">
            <tr>
                <th>campId</th>
                <th>campNameThai</th>
                <th>campNameEng</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <nav aria-label="Page navigation" class="pt-5">
        <ul class="pagination">
            <li class="page-item prev">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left bx-sm"></i></a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);">2</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="javascript:void(0);">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);">5</a>
            </li>
            <li class="page-item next">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right bx-sm"></i></a>
            </li>
        </ul>
    </nav>
@endsection
