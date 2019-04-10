<?php
$view->extend("MauticCoreBundle:Default:content.html.php");
$view['slots']->set('headerTitle',"Import from Google Sheet");
?>
<div class="wrapper">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation">
            <a href="#single" aria-controls="single" role="tab" data-toggle="tab">Single Import</a>
        </li>
        <li role="presentation">
            <a href="#mass" aria-controls="mass" role="tab" data-toggle="tab">Mass Import</a>
        </li>
        <li role="presentation">
            <a href="#segmentChangeLimit" aria-controls="segmentChangeLimit" role="tab" data-toggle="tab">Segment Limit</a>
        </li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane" id="single">
            <div class="row">
                <div class="col-sm-12">
                    <form class="form-horizontal" method="post" action="<?php echo $view['router']->path('plugin_mautic_gs_single'); ?>">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Sheet Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="sheet_name" required class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Worksheet Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="worksheet_name" required class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Lead List Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="list_name" required class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Lead List Description</label>
                            <div class="col-sm-10">
                                <textarea name="list_desc" class="form-control" ></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Lead Owner</label>
                            <div class="col-sm-10">
                                <select name="lead_owner" class="form-control">
                                    <option value="">Select Owner</option>
                                    <?php
                                    foreach($users as $user){
                                    ?>
                                    <option value="<?php echo $user->getId(); ?>"><?php echo $user->getFirstName().' '.$user->getLastName(); ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn-primary btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="mass">
            <div class="row">
                <div class="col-sm-12">
                    <form class="form-horizontal" method="post" action="<?php echo $view['router']->path('plugin_mautic_gs_massimport'); ?>">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Sheet Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="sheet_name" required class="form-control" />
                            </div>
                        </div>
                        <div class="form-group existing-segment-selectbox">
                            <label class="control-label col-sm-2" title="">Import in existing Segment</label>
                            <div class="col-sm-10">
                                <select name="existing_segment" class="form-control existing-segment">
                                    <option value="">Select List/Segment</option>
                                    <?php
                                    foreach($lists as $list){
                                    ?>
                                    <option value="<?php echo $list['id']; ?>"><?php echo $list['name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <small class="text-danger">If value from dropdown selected, below two fields will be ignored.</small>
                            </div>
                        </div>
                        <div class="form-group multiple-segment-checkbox">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="checkbox" name="multiple_segment"/>
                                <label>Import each worksheet in it's own Segment</label><br/>
                                <small class="text-danger">Field "Lead List Name" will be ignored if checkbox is checked</small>
                            </div>
                        </div>
                        <div class="form-group list-name-field">
                            <label class="control-label col-sm-2">Lead List Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="list_name" required class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Lead Owner</label>
                            <div class="col-sm-10">
                                <select name="lead_owner" class="form-control">
                                    <option value="">Select Owner</option>
                                    <?php
                                    foreach($users as $user){
                                    ?>
                                    <option value="<?php echo $user->getId(); ?>"><?php echo $user->getFirstName().' '.$user->getLastName(); ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn-primary btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="segmentChangeLimit">
            <div class="row">
            <div class="col-sm-12">
                    <form class="form-horizontal" method="post" action="<?php echo $view['router']->path('plugin_mautic_gs_changesegment'); ?>">
                        <div class="form-group source">
                            <label class="control-label col-sm-2" title="">Source Segment</label>
                            <div class="col-sm-10">
                                <select name="source_segment" class="form-control source-segment" required>
                                    <option value="">Select List/Segment</option>
                                    <?php
                                    foreach($lists as $list){
                                    ?>
                                    <option value="<?php echo $list['id']; ?>"><?php echo $list['name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group source">
                            <label class="control-label col-sm-2" title="">Destination Segment</label>
                            <div class="col-sm-10">
                                <select name="destination_segment" class="form-control destination-segment" required>
                                    <option value="">Select List/Segment</option>
                                    <?php
                                    foreach($lists as $list){
                                    ?>
                                    <option value="<?php echo $list['id']; ?>"><?php echo $list['name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group list-name-field">
                            <label class="control-label col-sm-2">Limit</label>
                            <div class="col-sm-10">
                                <input type="number" min="1" name="limit" required class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn-primary btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Source Segment Id</th>
                            <th>Destination Segment Id</th>
                            <th>Limit</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($changeSegments as $changeSegment){
                                ?>
                                <tr>
                                    <td><?php echo $changeSegment->getSource() ?></td>
                                    <td><?php echo $changeSegment->getDestination() ?></td>
                                    <td><?php echo $changeSegment->getLimit() ?></td>
                                    <td>
                                        <form method="POST" action="<?php echo $view['router']->path('plugin_mautic_gs_deletechangesegment'); ?>">
                                            <input name="idToDelete" type="hidden" value="<?php echo $changeSegment->getId() ?>" />
                                            <button type="submit"><i class="fa fa-trash text-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>