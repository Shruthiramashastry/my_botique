@extends('admin.layout')

@section('body')

<!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <h3 class="mb10">Add Categories</h3>

                            <div class="card">
                                <div class="card-header">
                                    Add Category
                                </div>
                                <div class="card-body card-body">
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Static</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <p class="form-control-plaintext">Username</p>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Text Input</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                                                <small class="form-text text-muted">This is a help text</small>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label for="email-input" class=" form-control-label">Email Input</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="email" id="email-input" name="email-input" placeholder="Enter Email" class="form-control">
                                                <small class="form-text text-muted">Please enter your email</small>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label for="password-input" class=" form-control-label">Password</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control">
                                                <small class="form-text text-muted">Please enter a complex password</small>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label for="disabled-input" class=" form-control-label">Disabled Input</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="disabled-input" name="disabled-input" placeholder="Disabled" disabled="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label for="textarea-input" class=" form-control-label">Textarea</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label for="select" class=" form-control-label">Select</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="select" id="select" class="form-select">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label for="selectLg" class=" form-control-label">Select Large</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="selectLg" id="selectLg" class="form-select form-select-lg">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label for="selectSm" class=" form-control-label">Select Small</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="selectSm" id="SelectLm" class="form-select form-select-sm">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                    <option value="4">Option #4</option>
                                                    <option value="5">Option #5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label for="disabledSelect" class=" form-control-label">Disabled Select</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <select name="disabledSelect" id="disabledSelect" disabled="" class="form-select">
                                                    <option value="0">Please select</option>
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label for="multiple-select" class=" form-control-label">Multiple select</label>
                                            </div>
                                            <div class="col col-md-9">
                                                <select name="multiple-select" id="multiple-select" multiple="" class="form-select" size="6">
                                                    <option value="1">Option #1</option>
                                                    <option value="2">Option #2</option>
                                                    <option value="3">Option #3</option>
                                                    <option value="4">Option #4</option>
                                                    <option value="5">Option #5</option>
                                                    <option value="6">Option #6</option>
                                                    <option value="7">Option #7</option>
                                                    <option value="8">Option #8</option>
                                                    <option value="9">Option #9</option>
                                                    <option value="10">Option #10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Radios</label>
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check mb-2">
                                                    <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">
                                                    <label for="radio1" class="form-check-label">Option 1</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">
                                                    <label for="radio2" class="form-check-label">Option 2</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">
                                                    <label for="radio3" class="form-check-label">Option 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Inline Radios</label>
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input">
                                                    <label for="inline-radio1" class="form-check-label">One</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input">
                                                    <label for="inline-radio2" class="form-check-label">Two</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input">
                                                    <label for="inline-radio3" class="form-check-label">Three</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Checkboxes</label>
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">
                                                    <label for="checkbox1" class="form-check-label">Option 1</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">
                                                    <label for="checkbox2" class="form-check-label">Option 2</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">
                                                    <label for="checkbox3" class="form-check-label">Option 3</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Inline Checkboxes</label>
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">
                                                    <label for="inline-checkbox1" class="form-check-label">One</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">
                                                    <label for="inline-checkbox2" class="form-check-label">Two</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">
                                                    <label for="inline-checkbox3" class="form-check-label">Three</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label for="file-input" class=" form-control-label">File input</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="file-input" name="file-input" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col col-md-3">
                                                <label for="file-multiple-input" class=" form-control-label">Multiple File input</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="file" id="file-multiple-input" name="file-multiple-input" multiple="" class="form-control">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </div>


@endsection
