<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg  modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="./controllers/membercontroller.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname" class="text-capitalize">first name</label>
                                <input type="text" class="form-control" id="fname" placeholder="enter first name"
                                    name="fname" value="">
                            </div>
                            <div class="form-group">
                                <label for="fname" class="text-capitalize">point</label>
                                <input type="text" class="form-control" id="points" placeholder="enter point"
                                    name="point" value="">
                            </div>
                            <div class="form-group">
                                <label for="fname" class="text-capitalize">type</label>
                                <input type="text" class="form-control" id="type" placeholder="enter  role " name="type"
                                    value="">
                            </div>
                            <div class="form-group col-12">
                                <label for="fname" class="text-capitalize">address</label>
                                <textarea class="form-control" id="address" rows="3"
                                    name="address"></textarea>
                            </div>
                           
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">last name</label>
                                <input type="text" class="form-control" id="lname" placeholder="enter last name"
                                    name="lname">
                            </div>
                            <div class="form-group">
                                <label for="fname" class="text-capitalize">phone</label>
                                <input type="tel" class="form-control" id="phone" placeholder="enter first phone number"
                                    name="phone" value="">
                            </div>
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="lname"> gender</label>
                                <div class="">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex"
                                            id="male" value="male">
                                        <label class="form-check-label" for="inlineRadio1">male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex"
                                            id="female" value="female">
                                        <label class="form-check-label" for="inlineRadio2">female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sex"
                                            id="not" value="unidentified" checked>
                                        <label class="form-check-label" for="inlineRadio2">not specified</label>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger text-uppercase" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary text-uppercase">save</button>
            </div>
            </form>
        </div>
    </div>
</div>