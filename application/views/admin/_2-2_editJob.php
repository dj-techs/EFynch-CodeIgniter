<!-- Content area --><div class="content"><!-- CKEditor default --><div class="panel panel-flat">    <div class="panel-heading">        <h5 class="panel-title">Edit Job Detail</h5>    </div>    <div class="panel-body">        <form method="post" class="form-horizontal" action="<?php echo(base_url('admin/jobs/editJob/'.$content['jobid'])); ?>" enctype="multipart/form-data">            <fieldset class="content-group">                <div class="form-group">                    <label class="control-label col-lg-2">Job Name: </label>                    <div class="col-lg-6">                        <div class="error"> <?php echo form_error('jobname'); ?></div>                        <input type="text" name="jobname" value="<?php echo $content['jobname']; ?>" class="form-control">                    </div>                </div>                <div class="form-group" id="users">                    <label class="control-label col-lg-2">Created By:</label>                    <div class="col-lg-6">                        <select id="user" name="createdby" class="form-control">                            <?php foreach ($users as $v) {?>                                <option <?php if($content['createdby'] == $v['userid']) echo 'selected';?> value="<?php echo $v['userid']; ?>"><?php echo $v['firstname'].' '.$v['lastname'];?></option>                            <?php }?>                        </select>                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Description: </label>                    <div class="col-lg-6">                        <?php echo form_error('jobdescription'); ?>                        <textarea name="jobdescription" class="form-control"><?php echo $content['jobdescription']; ?></textarea>                    </div>                </div>                <div class="form-group" id="state">                    <label class="control-label col-lg-2">Expertise:</label>                    <div class="col-lg-6">                        <select id="exp" name="expertiseid" class="form-control">                            <?php foreach ($exp as $v) {?>                                <option <?php if($content['expertiseid'] == $v['expertiseid']) echo 'selected';?> value="<?php echo $v['expertiseid'];?>"><?php echo $v['name'];?></option>                            <?php }?>                        </select>                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Address: </label>                    <div class="col-lg-6">                        <?php echo form_error('address'); ?>                        <textarea name="address" class="form-control"><?php echo $content['address']; ?></textarea>                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Budget: </label>                    <div class="col-lg-6">                        <?php echo form_error('budget'); ?>                        <input type="text" name="budget" value="<?php echo $content['budget']; ?>" class="form-control">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Days Posted: </label>                    <div class="col-lg-6">                        <?php echo form_error('daysposted'); ?>                        <input type="text" name="daysposted" value="<?php echo $content['daysposted']; ?>" class="form-control">                    </div>                </div>                <div class="form-group" id="state">                    <label class="control-label col-lg-2">States:</label>                    <div class="col-lg-6">                        <select id="states" name="state" class="form-control">                            <?php foreach ($states as $v) {?>                                <option <?php if($content['state'] == $v['state_prefix']) echo 'selected';?> value="<?php echo $v['state_prefix'];?>"><?php echo $v['state_name'];?></option>                            <?php }?>                        </select>                    </div>                </div>                <div class="form-group" id="city">                    <label class="control-label col-lg-2">Cities:</label>                    <div class="col-lg-6">                        <select id="cities" name="city" class="form-control">                            <?php foreach ($cities as $v) {?>                                <option <?php if($content['city'] == $v['city']) echo 'selected';?> value="<?php echo $v['city'];?>"><?php echo $v['city'];?></option>                            <?php }?>                        </select>                    </div>                </div>                <div class="form-group" id="jobstatus">                    <label class="control-label col-lg-2">Job Status:</label>                    <div class="col-lg-6">                        <select id="jobstatus" name="jobstatus" class="form-control">                            <?php foreach ($status as $k=>$v) {?>                                <option <?php if($content['jobstatus'] == $k) echo 'selected';?> value="<?php echo $k; ?>"><?php echo $v;?></option>                            <?php }?>                        </select>                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Zip: </label>                    <div class="col-lg-6">                        <?php echo form_error('zip'); ?>                        <input type="text" name="zip" value="<?php echo $content['zip']; ?>" class="form-control">                    </div>                </div>                <div class="form-group" id="timeframe">                    <label class="control-label col-lg-2">Work TimeFrame:</label>                    <div class="col-lg-6">                        <select name="timeframe" class="form-control">                            <option <?php if($content['timeframe'] == 'Emergency') echo 'selected';?> value="Emergency">Emergency</option>                            <option <?php if($content['timeframe'] == 'Urgent') echo 'selected';?> value="Urgent">Urgent</option>                            <option <?php if($content['timeframe'] == '1 to 2 Weeks') echo 'selected';?> value="1 to 2 Weeks">1 to 2 Weeks</option>                            <option <?php if($content['timeframe'] == '2 to 4 Weeks') echo 'selected';?> value="2 to 4 Weeks">2 to 4 Weeks</option>                            <option <?php if($content['timeframe'] == 'No Time Frame') echo 'selected';?> value="No Time Frame">No Time Frame</option>                        </select>                    </div>                </div>                <div class="form-group" id="indoor">                    <label class="control-label col-lg-2">Indoor/Outdoor:</label>                    <div class="col-lg-6">                        <select name="indoor" class="form-control">                            <option <?php if($content['indoor'] == 'Indoors') echo 'selected';?>  value="Indoors">Indoors</option>                            <option <?php if($content['indoor'] == 'Outdoors') echo 'selected';?>  value="Outdoors">Outdoors</option>                        </select>                    </div>                </div>                <div class="form-group" id="hometype">                    <label class="control-label col-lg-2">Home Type:</label>                    <div class="col-lg-6">                        <select name="hometype" class="form-control">                            <option <?php if($content['hometype'] == 'Condo or Appartment') echo 'selected';?>  value="Condo or Appartment">Condo or Appartment</option>                            <option <?php if($content['hometype'] == 'Townhome') echo 'selected';?>  value="Townhome">Townhome</option>                            <option <?php if($content['hometype'] == 'Single Family') echo 'selected';?>  value="Single Family">Single Family</option>                            <option <?php if($content['hometype'] == 'Commercial') echo 'selected';?>  value="Commercial">Commercial</option>                        </select>                    </div>                </div>                <div class="form-group" id="starting_state">                    <label class="control-label col-lg-2">Starting State:</label>                    <div class="col-lg-6">                        <select name="starting_state" class="form-control">                            <option <?php if($content['starting_state'] == 'Emergency') echo 'selected';?>  value="Emergency">Emergency</option>                            <option <?php if($content['starting_state'] == 'Ready to go') echo 'selected';?>  value="Ready to go">Ready to go</option>                            <option <?php if($content['starting_state'] == 'Planning') echo 'selected';?>  value="Planning">Planning</option>                            <option <?php if($content['starting_state'] == 'Pricing') echo 'selected';?>  value="Pricing">Pricing</option>                        </select>                    </div>                </div>                <div class="form-group" id="total_stories">                    <label class="control-label col-lg-2">Total Stories Of Home:</label>                    <div class="col-lg-6">                        <select name="total_stories" class="form-control">                            <option <?php if($content['total_stories'] == '1') echo 'selected';?>  value="1">1</option>                            <option <?php if($content['total_stories'] == '2') echo 'selected';?>  value="2">2</option>                            <option <?php if($content['total_stories'] == '3') echo 'selected';?>  value="3">3</option>                            <option <?php if($content['total_stories'] == '4') echo 'selected';?>  value="4">4</option>                        </select>                    </div>                </div>                <div class="form-group" id="material_option">                    <label class="control-label col-lg-2">Include Material In Bid:</label>                    <div class="col-lg-6">                        <select name="material_option" class="form-control">                            <option <?php if($content['material_option'] == 'Yes') echo 'selected';?>  value="Yes">Yes</option>                            <option <?php if($content['material_option'] == 'No') echo 'selected';?>  value="No">No</option>                        </select>                    </div>                </div>                <div class="form-group" id="rate_type">                    <label class="control-label col-lg-2">Rate Type:</label>                    <div class="col-lg-6">                        <select name="rate_type" class="form-control">                            <option <?php if($content['rate_type'] == 'Flat Rate') echo 'selected';?>  value="Flat Rate">Flat Rate</option>                            <option <?php if($content['rate_type'] == 'Hourly') echo 'selected';?>  value="Hourly">Hourly</option>                        </select>                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Job Approximate Location: </label>                    <div class="col-lg-6">                        <?php echo form_error('location'); ?>                        <input type="text" placeholder="Job Approximate Location(country,intersection,neighborhood)" name="location" value="<?php echo $content['location']; ?>" class="form-control">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Home Built In?: </label>                    <div class="col-lg-6">                        <?php echo form_error('year_constructed'); ?>                        <input type="text" placeholder="What year was your home built(can be approximate)?" name="year_constructed" value="<?php echo $content['year_constructed']; ?>" class="form-control">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Current Condition: </label>                    <div class="col-lg-6">                        <?php echo form_error('current_condition'); ?>                        <input type="text" placeholder="What is the current condition?(What work are you asking for?)" name="current_condition" value="<?php echo $content['current_condition']; ?>" class="form-control">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Problem Description: </label>                    <div class="col-lg-6">                        <?php echo form_error('first_problem_notice'); ?>                        <input type="text" placeholder="When and how was the problem first noticed?" name="first_problem_notice" value="<?php echo $content['first_problem_notice']; ?>" class="form-control">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Resolution: </label>                    <div class="col-lg-6">                        <?php echo form_error('resolution'); ?>                        <input type="text" placeholder="What is the resolution you are asking for?" name="resolution" value="<?php echo $content['resolution']; ?>" class="form-control">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Measurements: </label>                    <div class="col-lg-6">                        <?php echo form_error('measurements'); ?>                        <input type="text" placeholder="Are there any relevant measurements you can provide(room size ,pipe size)?" name="measurements" value="<?php echo $content['measurements']; ?>" class="form-control">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Material Preferences: </label>                    <div class="col-lg-6">                        <?php echo form_error('material_preferences'); ?>                        <input type="text" placeholder="Do you have any preference on materials used(list and attach pictures)" name="material_preferences" value="<?php echo $content['material_preferences']; ?>" class="form-control">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Purchased Materials: </label>                    <div class="col-lg-6">                        <?php echo form_error('purchased_materials'); ?>                        <input type="text" placeholder="Have you purchased any material for this project (list and attach pictures)?" name="purchased_materials" value="<?php echo $content['purchased_materials']; ?>" class="form-control">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Access To Area: </label>                    <div class="col-lg-6">                        <?php echo form_error('access_to_area'); ?>                        <input type="text" placeholder="Please describe the access to the area(i.e basement with walk-in doors)?" name="access_to_area" value="<?php echo $content['access_to_area']; ?>" class="form-control">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Your Availability: </label>                    <div class="col-lg-6">                        <?php echo form_error('your_availability'); ?>                        <input type="text" placeholder="Can you list your preffered availability(evenings, weekend, weekdays)?" name="your_availability" value="<?php echo $content['your_availability']; ?>" class="form-control">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2">Relevant Info: </label>                    <div class="col-lg-6">                        <?php echo form_error('relevant_info'); ?>                        <input type="text" placeholder="Other Relevant Information?" name="relevant_info" value="<?php echo $content['relevant_info']; ?>" class="form-control">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2"> Start Date: </label>                    <div class="col-lg-6">                        <?php echo form_error('startdate'); ?>                        <input type="text" name="startdate" id="datepicker" value="<?php echo $content['startdate'];?>" class="form-control pickadate-limits">                    </div>                </div>                <!--<div class="form-group">                    <label class="control-label col-lg-2"> Completed Date: </label>                    <div class="col-lg-6">                        <?php /*echo form_error('completeddate'); */?>                        <input type="text" name="completeddate" id="datepicker" value="<?php /*echo $content['completeddate'];*/?>" class="form-control pickadate-limits">                    </div>                </div>-->                <div class="form-group">                    <label class="control-label col-lg-2"> Completion Date: </label>                    <div class="col-lg-6">                        <?php echo form_error('completiondate'); ?>                        <input type="text" name="completiondate" id="datepicker2" value="<?php echo $content['completiondate'];?>" class="form-control pickadate-limits">                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2"> Images: </label>                    <div class="col-lg-10">                        <?php foreach ($content['images'] as $v) {?>                            <img title="click to delete image" id="<?php echo 'key-'.$v['docid'];?>" data-key="<?php echo $v['docid'];?>" class="workImages" style="cursor:hand;float:left;height: auto;width: 30%;margin-right: 10px;margin-bottom: 10px;" src="                    <?php                            if(!@getimagesize(JOB_IMG.$v['dockey'].'.'.$v['docext']))                                echo DEFAULT_USER;                            else                                echo JOB_IMG.$v['dockey'].'.'.$v['docext'];                            ?>" />                        <?php }?>                    </div>                </div>                <div class="form-group">                    <label class="control-label col-lg-2"> Upload Image: </label>                    <div class="col-lg-6">                        <input type="file" multiple="" name="image[]" id="image" class="form-control">                    </div>                </div>                <div class="form-group">                    <div class="col-lg-3">                        <button type="submit" class="btn bg-teal-400">Submit<i class="icon-arrow-right14 position-right"></i></button>                        <a href="<?php echo base_url('admin/users')?>">                            <button type="button" class="btn bg-teal-400">Cancel<i class="icon-arrow-right14 position-right"></i></button>                        </a>                    </div>                </div>            </fieldset>        </form>    </div></div><script>    $(document).ready(function(){        $(".workImages").click(function(){            var id = $(this).attr('data-key');            $("#loaderImg").show();            var url = '<?php echo base_url('admin/jobs/getDeleteWorkImg');?>';            $.ajax(                {                    url: url,                    type: "POST",                    dataType: "text",                    data: {id:id},                    success: function (data) {                        if (data != '') {                            //alert(JSON.stringify(data));                            $("#loaderImg").hide();                            $('#key-'+id).remove();                            alert(data);                        }                        //data: return data from server                    },                    error: function (jqXHR, textStatus, errorThrown) {                        $("#loaderImg").hide();                        alert("Something went wrong... Please try again")                        //if fails                    }                });        });        $('#states').on('change', function() {            $("#loaderImg").show();            var elm = $('option:selected', this);            var id = elm.val();            var url = '<?php echo base_url('admin/users/getCities');?>';            $.ajax(                {                    url: url,                    type: "POST",                    dataType: "text",                    data: {id:id},                    success: function (data) {                        if (data != '') {                            //alert(JSON.stringify(data));                            $("#loaderImg").hide();                            $('#cities').html(data);                        }                        //data: return data from server                    },                    error: function (jqXHR, textStatus, errorThrown) {                        $("#loaderImg").hide();                        alert("Something went wrong... Please try again")                        //if fails                    }                });        });    });</script><!-- /CKEditor default -->