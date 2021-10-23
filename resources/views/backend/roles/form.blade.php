<div class="form-body">
    <div class="form-row">


        <div class="form-group col-md-12">
            <label>Name</label>
            <div class="input-group">
                <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="input-10"
                    name="name" placeholder="Enter Role Name" value="@if($role->name){{$role->name}}@else{{old('name')}}@endif">
            </div>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="box-body">
            <div class="form-group">
                <div class="well">

                    <ul class="checkbox-tree root">
                        <li>
                            <input type="checkbox" id="select-all"/>
                            <label for="select-all">Select All </label>
                        </li>
                    </ul>

                    @foreach($route_tree as $key => $route)

                        @if(is_array($route))

                            <ul class="checkbox-tree root">
                                <li class="parent-menu">
                                    @php $count =0; @endphp

                                    @foreach($route as $k => $rm)
                                    {{-- <li>all {{$key.'.'.$rm}}</li> --}}
                                        @if($role->name && $role->hasPermissionTo($key.'.'.$rm)) @php $count++; @endphp  @endif
                                    @endforeach

                                    <span class="float-left collapsed"><i class="fa-angle-right"></i></span>
                                    <input type="checkbox" id="md_checkbox_{{$key}}" class="filled-in chk-col-info parent"
                                        name="" @if($count == count($route)) checked @endif/>
                                    <label for="md_checkbox_{{$key}}">{{$key}}</label>

                                    <ul class="menu">
                                        @foreach($route as $k => $rm)
                                            <li>
                                                <input type="checkbox" id="md_checkbox_{{$key.$k}}"
                                                    class="filled-in chk-col-info children"
                                                    @if($role->name && $role->hasPermissionTo($key.'.'.$rm)) checked @endif
                                                    name="permissions[]" value="{{$key.'.'.$rm}}"/>
                                                <label for="md_checkbox_{{$key.$k}}">{{$rm}}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        @else

                            <ul class="checkbox-tree root">
                                <li class="single-menu">
                                    <input type="checkbox" id="md_checkbox_{{$key}}" class="filled-in chk-col-info children"
                                        @if($role->name && $role->hasPermissionTo($route)) checked @endif
                                        name="permissions[]" value="{{$route}}"/>
                                    <label for="md_checkbox_{{$key}}">{{$route}}</label>
                                </li>
                            </ul>

                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        jQuery(document).ready(function () {
            var cbTree = $('.checkbox-tree').checkboxTree({
                checkChildren: true,
                singleBranchOpen: true,
                openBranches: []
            });
            $('#tree-expand').on('click', function (e) {
                cbTree.expandAll();
            });
            $('#tree-collapse').on('click', function (e) {
                cbTree.collapseAll();
            });

            $('#tree-deselect-all').on('click', function (e) {
                cbTree.uncheckAll();
            });

            $('#select-all').on('click', function (e) {
                console.log(this.checked);
                if (this.checked) {
                    $(':checkbox').each(function () {
                        this.checked = true;
                    });
                } else {
                    $(':checkbox').each(function () {
                        this.checked = false;
                    });
                }
            });

            $('.parent').click(function (event) {
                if (this.checked) {
                    // Iterate each checkbox
                    $(this).siblings('.menu').find('li').children(':checkbox').each(function () {
                        this.checked = true;
                    });
                } else {
                    $(this).siblings('.menu').find('li').children(':checkbox').each(function () {
                        this.checked = false;
                    });
                }
            });
        });
    </script>
@endpush


