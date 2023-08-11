<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage"); ?>

<div class="container">
    <!-- <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <form action="<?php echo URL ?>updateData" method="post" id="form">
                <div class="mt-3">
                    <label for="">Organization name</label>
                    <input type="text" name="company_name" id="company_name"
                        class="form-control form-control-sm">
                </div>

                <div class="mt-3">
                    <label for="">Tagline</label>
                    <input type="text" name="company_slogan" id="company_slogan"
                        class="form-control form-control-sm">
                </div>
                
                <div class="row mt-3">
                    <div class="col">
                        <label for="">ESTD</label>
                        <input type="number" name="estd" id="estd"
                            class="form-control form-control-sm">
                    </div>

                    <div class="col">
                        <label for="">Latitude</label>
                        <input type="number" id="lat" name="lat"
                            class="form-control form-control-sm">
                    </div>

                    <div class="col">
                        <label for="">Longitude</label>
                        <input type="number" id="longitude" name="longitude"
                            class="form-control form-control-sm">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label for="">Facebook page link</label>
                        <input type="text" name="facebook_page_link" id="facebook_page_link"
                            class="form-control form-control-sm">
                    </div>

                    <div class="col">
                        <label for="">Youtube channel link</label>
                        <input type="text" name="youtube_channel_link" id="youtube_channel_link"
                            class="form-control form-control-sm">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <button class="btn btn-success btn-sm" id="save_data_btn"> Save data </button>
                    </div>

                    <div class="col text-end">
                        <a href="<?php echo URL ?>contact"> To update contact details click here </a>
                    </div>
                </div>
                
            </form>
        </div>
    </div> -->
    <form action="<?php echo URL ?>updateData" method="post" id="form">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="organization_name" class="form-label">Organization Name</label>
                    <input type="text" class="form-control" id="organization_name" name="organization_name" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="name" class="form-label">Owner Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" class="form-control" id="position" name="position" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="whatsapp" class="form-label">Whatsapp</label>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="github" class="form-label">Github</label>
                    <input type="text" class="form-control" id="github" name="github" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="linkdin" class="form-label">Linkdin</label>
                    <input type="text" class="form-control" id="linkdin" name="linkdin" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="youtub" class="form-label">Youtube</label>
                    <input type="text" class="form-control" id="youtub" name="youtub" aria-describedby="textHelp" placeholder="Enter Organization Name" autocomplete="off">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="project_overview" class="form-label">Project Overview</label>
                    <textarea class="form-control" id="project_overview" name="project_overview" rows="3"></textarea>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="mb-3">
                    <label for="declaration" class="form-label">Declaration</label>
                    <textarea class="form-control" id="declaration" name="declaration" rows="3"></textarea>
                </div>
            </div>

            <div class="text-end">
                <button type="button" id="save_data_btn" class="btn btn-success">Save / Update</button>
            </div>
        </div>
    </form>
</div>