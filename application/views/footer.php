<div class="footer mt-3 text-center border-top">
    <img class="img-fluid mt-5" src="<?php echo base_url(); ?>assets/ricelytics_logo_black.png">
    <h6 class="text-center mt-3 text-muted">Data presented sourced with the following collaborators</h6>
    <img class="logos-collaborators pt-3 pb-4" src="<?php echo base_url(); ?>assets/collaborators.png">
</div>
<div id="feedbackModal" class="modal fade" tabindex="-1" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hi! Welcome to RiceLytics!</h5>
            </div>
            <div class="modal-body">
                <p>We want to see the general overview on what type of users uses RiceLytics. Tell us who you are by filling up this quick survey.</p>
                <?php 
                $attributes = array('id' => 'feedbackform');
                
                echo form_open('Feedbacks/submit', $attributes);
                ?>
                <label for="age">Age:</label>
                <select name="age" class="form-control">
                    <option disabled selected value>Select an option...</option>
                    <option value="1">30 years old and below</option>
                    <option value="2">31 to 45 years old</option>
                    <option value="3">46 to 60 years old</option>
                    <option value="4">61 years old and above</option>
                </select>
                <label for="sex">Sex:</label>
                <select name="sex" class="form-control">
                    <option disabled selected value>Select an option...</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
                <label class="mt-2" for="sector">Sector:</label>
                <select name="sector" class="form-control">
                    <option disabled selected value>Select an option...</option>
                    <option value="1">Government</option>
                    <option value="2">Private</option>
                    <option value="3">Academe</option>
                    <option value="4">Non-Government</option>
                    <option value="5">Personal</option>
                </select>
                <label class="mt-2" for="agency_school">Organization Name:</label>
                <input name="agency_school" class="form-control" type="text" placeholder="Type name of your agency/school...">
                <label class="mt-2" for="purpose_work">Purpose:</label>
                <select name="purpose_work" class="form-control">
                    <option disabled selected value>Select an option...</option>
                    <option value="1">Research</option>
                    <option value="2">School Work</option>
                    <option value="3">Policy-Making</option>
                    <option value="4">Proposal Making</option>
                    <option value="5">Baseline</option>
                    <option value="6">Others</option>
                </select>
                <label class="mt-2" for="region">Region:</label>
                <select id="region_list" name="region" class="form-control">
                    <option disabled selected value>Select an option...</option>
                        <?php for ($i = 0; $i < count($regions); $i++) {
                            echo '<option value="'.$regions[$i]["id"].'">'.$regions[$i]["location_name"].'</option>';
                        } ?>
                </select>
                <label class="mt-2" for="province">Province:</label>
                <select id="province_list" name="province" class="form-control">
                    <option disabled selected value>Select an option...</option>
                </select>
                <label class="mt-2" for="municipality">City/Municipality:</label>
                <select id="municipality_list" name="municipality" class="form-control">
                    <option disabled selected value>Select an option...</option>
                </select>
                <input name="others_inspect" class="form-control hf" type="text" placeholder="Input Others for Inspection...">
                <p class="pt-3">Thank you!</p>
                <input name="save" type="submit" class="mt-2 btn btn-primary float-right" value="Submit">
                <?php
                echo form_close();
                ?>
            </div>
            <div class="modal-footer">
                <p class="message"></p>
            </div>
        </div>
    </div>
</div>