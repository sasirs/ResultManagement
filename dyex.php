<form action="insert_class.php" method="post" class="needs-validation" novalidate>
                                <div class="form-group m-3">
                                    <label for="classid" class="fw-bolder fs-6">Class Id: <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" placeholder="Enter Class ID"
                                        name="classid" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group m-3">
                                    <label for="dept" class="fw-bolder fs-6">Year/Department:<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter dapartment Name year/dept" name="dept" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group m-3">
                                    <label for="section" class="fw-bolder fs-6">Section:<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter section " required
                                        name="section">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group m-3">
                                    <label for="incharge" class="fw-bolder fs-6">Incharge Name:<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter incharge Name " required
                                        name="incharge">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>

                                <div id="inputsub">
                                    <div class="form-group m-3">
                                        <label for="sub1" class="fw-bolder fs-6">subject :<span
                                                class="text-danger">*</span></label>
                                        <div class="row ms-1">

                                            <input type="text" class="form-control col"
                                                placeholder="Enter subject code " name="sub[]" required>

                                            <div class="input-group-append  col">
                                                <button id=" removeRow" type="button" class="btn btn-danger">
                                                    Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="newRow"></div>
                                    <div class="btn d-grid justify-content-center">
                                        <button id="addRow" type="button" class="btn btn-success text-light">Add
                                            Row</button>
                                    </div>
                                </div>
                        </div>









                        <div class=" d-flex justify-content-center m-3">
                            <button class="btn btn-primary" type="submit" name="submit">submit</button>
                        </div>

                        </form>