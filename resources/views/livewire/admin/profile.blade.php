<div>
    @push('styles')
        <style>
            .avatar-upload {
                position: relative;
                max-width: 205px;
                margin: 50px auto;
                .avatar-edit {
                    position: absolute;
                    right: 12px;
                    z-index: 1;
                    top: 10px;
                    input {
                        display: none;
                        + label {
                            display: inline-block;
                            width: 34px;
                            height: 34px;
                            margin-bottom: 0;
                            border-radius: 100%;
                            background: #FFFFFF;
                            border: 1px solid transparent;
                            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                            cursor: pointer;
                            font-weight: normal;
                            transition: all .2s ease-in-out;
                            &:hover {
                                background: #f1f1f1;
                                border-color: #d6d6d6;
                            }
                            &:after {
                                content: "\f040";
                                font-family: 'FontAwesome';
                                color: #757575;
                                position: absolute;
                                top: 10px;
                                left: 0;
                                right: 0;
                                text-align: center;
                                margin: auto;
                            }
                        }
                    }
                }
                .avatar-preview {
                    width: 192px;
                    height: 192px;
                    position: relative;
                    border-radius: 100%;
                    border: 6px solid #F8F8F8;
                    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
                    > div {
                        width: 100%;
                        height: 100%;
                        border-radius: 100%;
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: center;
                    }
                }
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @endpush
    <div class="row">
        <div class="col-12">
{{--            <div class="page-title-box">--}}
{{--                <h4 class="page-title">{{ $adminData->name }} : Profile</h4>--}}
{{--            </div>--}}

            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
                <h4 class="page-title">Profile</h4>
            </div>

            <div class="row">
                <div class="col-lg-3 col-xl-3">
                    <div class="card">
                        <div class="card-body" >
                            <div class="d-flex align-items-center justify-content-center mb-3">
{{--        <form action="#" >--}}
{{--                                <div class="avatar-upload">--}}
{{--                                    <div class="avatar-edit">--}}
{{--                                        <input type='file' id="imageUpload" name="photo" accept=".png, .jpg, .jpeg" />--}}
{{--                                        <label for="imageUpload"></label>--}}
{{--                                    </div>--}}
{{--                                    <div class="avatar-preview">--}}
{{--                                        <div id="imagePreview" style="background-image: url({{ $adminData->photo }});">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <img class="d-flex me-3 rounded-circle avatar-lg w-50 h-50" src="{{ asset($adminData->photo) }}" alt="Generic placeholder image">--}}
                            </div>

                            <h5 class="mb-3  text-uppercase bg-light p-2"><i class="mdi mdi-account-circle me-1"></i> Personal Information</h5>
                            <div class="">

                                <h4 class="font-13 text-muted text-uppercase mb-1">Name :</h4>
                                <p class="mb-3">{{ $adminData->name }}</p>

                                <h4 class="font-13 text-muted text-uppercase mb-1">Username :</h4>
                                <p class="mb-3">{{ $adminData->username }}</p>

                                <h4 class="font-13 text-muted text-uppercase mb-1">Email :</h4>
                                <p class="mb-3">{{ $adminData->email }}</p>

                                <h4 class="font-13 text-muted text-uppercase mb-1">Phone :</h4>
                                @if(!empty( $adminData->phone ))
                                    <p class="mb-0">{{ $adminData->phone }}</p>
                                @else
                                   -
                                @endif

                                <h4 class="font-13 text-muted text-uppercase mb-1">Added :</h4>
                                @if(empty($adminData->created_at))
                                    <p class="mb-3"> - </p>
                                @else
                                    <p class="mb-3">{{$adminData->created_at->thaidate()}}</p>
                                @endif

                                <h4 class="font-13 text-muted text-uppercase mb-1">Updated :</h4>
                                @if(empty($adminData->updated_at))
                                    <p class="mb-3"> - </p>
                                @else
                                    <p class="mb-3">{{$adminData->updated_at->thaidate()}}</p>
                                @endif

{{--                                <h4 class="font-13 text-muted text-uppercase mb-1">Status :</h4>--}}
{{--                                @if($adminData->status==1)--}}
{{--                                    <span class="badge bg-success">Active</span>--}}
{{--                                @elseif($adminData->status==0)--}}
{{--                                    <span class="badge bg-danger">InActive</span>--}}
{{--                                @endif--}}

                            </div>
                        </div>
                    </div> <!-- end card-->
                </div>
                <div class="col-lg-9 col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title mb-4">Edit Profile </h4>

                                <ul class="nav nav-pills navtab-bg nav-justified" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="#editprofile" data-bs-toggle="tab" aria-expanded="false" class="nav-link active" aria-selected="false" role="tab" tabindex="-1">
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="#changepassword" data-bs-toggle="tab" aria-expanded="true" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                            Change Password
                                        </a>
                                    </li>
{{--                                    <li class="nav-item" role="presentation">--}}
{{--                                        <a href="#messages1" data-bs-toggle="tab" aria-expanded="false" class="nav-link " aria-selected="true" role="tab">--}}
{{--                                            Messages--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                </ul>
                                <div class="tab-content">


                                    <div class="tab-pane active " id="editprofile" role="tabpanel">
                                        <form action="#" >
                                            @csrf
                                            {{--start row--}}
                                            <div class="row">
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input type="text" id="name" name="name" value="{{ $adminData->name }}" class="form-control @error('name') is-invalid @enderror">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Username</label>
                                                        <input type="text" id="name" name="username" value="{{ $adminData->username }}" class="form-control @error('username') is-invalid @enderror">
                                                    </div>
                                                </div>

                                            </div>
                                            {{--end row--}}
                                            {{--start row--}}
                                            <div class="row">
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="text" id="email" name="email" value="{{ $adminData->email }}" class="form-control @error('email') is-invalid @enderror">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="mb-3">
                                                        <label for="phone" class="form-label">Phone</label>
                                                        <input type="text" id="phone" name="phone" value="{{ $adminData->phone }}" class="form-control @error('phone') is-invalid @enderror">
                                                    </div>
                                                </div>

                                            </div>
                                            {{--end row--}}
                                        <div class="row">
                                            <div class="avatar-upload">
                                                <div class="avatar-edit">
                                                    <input type='file' id="imageUpload" name="photo" accept=".png, .jpg, .jpeg" />
                                                    <label for="imageUpload"></label>
                                                </div>
                                                <div class="avatar-preview">
                                                    <div id="imagePreview" style="background-image: url({{ $adminData->photo }});">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary">Update</button>
                                        </form>


                                    </div>



                                    <div class="tab-pane" id="changepassword" role="tabpanel">
                                        Change Password
                                    </div>
{{--                                    <div class="tab-pane show" id="messages1" role="tabpanel">--}}
{{--                                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>--}}
{{--                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
</script>

@endpush
