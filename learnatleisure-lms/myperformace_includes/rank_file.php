                    <h3>Rank and File</h3>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!--<div class="col-sm-3 mb-1">
                                        <label for="select_department" class="form-label">Select Department</label>
                                        <select id="select_department" class="form-select">
                                            <option selected disabled>Select Department</option>
                                            <?php foreach ($result_department as $row) : ?>
                                            <option value="<?php echo escape($row['department_id']);?>"><?php echo escape($row['department_name']);?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>-->
                                    <div class="col-sm-3 mb-1">
                                        <label for="select_employee" class="form-label">Employee Name</label>
                                        <select id="select_employee" class="form-select">
                                            <option selected disabled>Select Employee</option>
                                            <?php foreach($result_getemployee_rankfile as $row):?>
                                                <option value="<?php echo escape($row['employee_id']);?>"><?php echo escape(strtoupper($row['employee_first_name'] . ' ' . $row['employee_last_name']));?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="mb-1">
                                            <label for="period_covered_start" class="form-label">Period Start</label>
                                            <input type="date" class="form-control" id="period_covered_start">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="mb-1">
                                            <label for="period_covered_end" class="form-label">Period End</label>
                                            <input type="date" class="form-control" id="period_covered_end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <h5>Key Work Responsibilities</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group mb-1">
                                            <textarea class="form-control"  rows="3" placeholder="1.) type here..."></textarea>
                                        </div>
                                        <div class="form-group mb-1">
                                            <textarea class="form-control"  rows="3" placeholder="2.) type here..."></textarea>
                                        </div>
                                        <div class="form-group mb-1">
                                            <textarea class="form-control"  rows="3" placeholder="3.) type here..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <h5>Results/Goals Achieved</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group mb-1">
                                            <textarea class="form-control"  rows="3" placeholder="1.) type here..."></textarea>
                                        </div>
                                        <div class="form-group mb-1">
                                            <textarea class="form-control"  rows="3" placeholder="2.) type here..."></textarea>
                                        </div>
                                        <div class="form-group mb-1">
                                            <textarea class="form-control"  rows="3" placeholder="3.) type here..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
         
                        <hr>

                        <h4>Behavioral Assesment of Competencies</h4>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>A. Job knowledge</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="job_kownledge_1" name="job_nowledge" value="1"/>
                                    <label class="form-check-label" for="job_kownledge_1">
                                    1) Poor to Minimum knowledge of several phases of the job;always needs detailed instructions and guidance to ensure adequate performance
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="job_kownledge_2" name="job_nowledge" value="2"/>
                                    <label class="form-check-label" for="job_kownledge_2">
                                    2) Poor to Minimum knowledge of several phases of the job;always needs detailed instructions and guidance to ensure adequate performance
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="job_kownledge_3" name="job_nowledge" value="3"/>
                                    <label class="form-check-label" for="job_kownledge_3">
                                    3) Possesses considerable knowledge of the job to carry on regular work, occationaly needs instructions or assistance	
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="job_kownledge_4" name="job_nowledge" value="4"/>
                                    <label class="form-check-label" for="job_kownledge_4">
                                    4) Has adequate to complete mastery of the job, able to utilize basic job methods and techniques under normal conditions; rarely needs instructions or guidance		
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="job_kownledge_5" name="job_nowledge" value="5"/>
                                    <label class="form-check-label" for="job_kownledge_5">
                                    5) Has adequate to complete mastery of the job, able to utilize basic job methods and techniques under normal conditions; rarely needs instructions or guidance		
                                    </label>
                                </div>
                                <textarea class="form-control"  rows="3" placeholder="Remarks"></textarea>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>B. Quality of Work/Quality of Work</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="quality_work_1" name="quality_work" value="1"/>
                                    <label class="form-check-label" for="quality_work_1">
                                    1) Work slightly below standards commits frequent mistakes of the same kinds outputs usually need a lot of re-work Often finds
                                    difficulty in coping with assignments and takes more time to complete a job.
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="quality_work_2" name="quality_work" value="2"/>
                                    <label class="form-check-label" for="quality_work_2">
                                    2) Work slightly below standards commits frequent mistakes of the same kinds outputs usually need a lot of re-work Often finds
                                    difficulty in coping with assignments and takes more time to complete a job.
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="quality_work_3" name="quality_work" value="3"/>
                                    <label class="form-check-label" for="quality_work_3">
                                    3) Work output generally meets standards or above standards: there are only a few errors and mistakes and minor re-work can be done;
                                    Assignments are usually on schedule output is consistent with normal requirements 
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="quality_work_4" name="quality_work" value="4"/>
                                    <label class="form-check-label" for="quality_work_4">
                                    4) Work very much above standards, accurate complete in all details;rarely needs corrections or re-work; Consistenly complete much more than amount of work required
                                    and is able to assume additional workload.	
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="quality_work_5" name="quality_work" value="5"/>
                                    <label class="form-check-label" for="quality_work_5">
                                    5) Work very much above standards, accurate complete in all details;rarely needs corrections or re-work; Consistenly complete much more than amount of work required
                                    and is able to assume additional workload.	
                                    </label>
                                </div>
                                <textarea class="form-control"  rows="3" placeholder="Remarks"></textarea>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>C. Dependability and Reliability</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="dependability_1" name="dependability_reliability" value="1"/>
                                    <label class="form-check-label" for="dependability_1">
                                    1) Sometimes unrealiable; needs close and constant supervision and constant follow-ups;frequently misses deadline
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="dependability_2" name="dependability_reliability" value="2"/>
                                    <label class="form-check-label" for="dependability_2">
                                    2) Sometimes unrealiable; needs close and constant supervision and constant follow-ups;frequently misses deadline
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="dependability_3" name="dependability_reliability" value="3"/>
                                    <label class="form-check-label" for="dependability_3">
                                    3) Generally reliable but occasionally needs some direction; follow-ups required; meets deadlines
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="dependability_4" name="dependability_reliability" value="4"/>
                                    <label class="form-check-label" for="dependability_4">
                                    4) Exeptionally reliable; rarely needs follow-ups; completes assignments often before deadlines; does superior
                                    job even under pressure
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="dependability_5" name="dependability_reliability" value="5"/>
                                    <label class="form-check-label" for="dependability_5">
                                    5) Exeptionally reliable; rarely needs follow-ups; completes assignments often before deadlines; does superior
                                    job even under pressure
                                    </label>
                                </div>
                                <textarea class="form-control"  rows="3" placeholder="Remarks"></textarea>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>D. Human Relations and Teamwork</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="humanrelation_1" name="human_relation" value="1"/>
                                    <label class="form-check-label" for="humanrelation_1">
                                    1) Gives Limited to no cooperation; sometimes difficult to work with and is somewhat negative to others
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="humanrelation_2" name="human_relation" value="2"/>
                                    <label class="form-check-label" for="humanrelation_2">
                                    2) Gives Limited to no cooperation; sometimes difficult to work with and is somewhat negative to others
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="humanrelation_3" name="human_relation" value="3"/>
                                    <label class="form-check-label" for="humanrelation_3">
                                    3) Cooperative and normally able to share in the realization of any group activity when called for; is generally a good team player and likes
                                    to work with by others
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="humanrelation_4" name="human_relation" value="4"/>
                                    <label class="form-check-label" for="humanrelation_4">
                                    4) Very cooperative; willingly participates in all group activities, fits easily and has a good influence on group moral; well liked
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="humanrelation_5" name="human_relation" value="5"/>
                                    <label class="form-check-label" for="humanrelation_5">
                                    5) Very cooperative; willingly participates in all group activities, fits easily and has a good influence on group moral; well liked
                                    </label>
                                </div>
                                <textarea class="form-control"  rows="3" placeholder="Remarks"></textarea>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>E. Compliance to Policies, Rules and Regulations/Punctuality and Attendance</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="compliance_policies_1" name="compliance_policies" value="1"/>
                                    <label class="form-check-label" for="compliance_policies_1">
                                    1) Employee has committed an infraction or was suspended during the rating period and needs close supervision or guidance;Often late for work and shows
                                    little concern for time loast from work; does not observe break periods strickly
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="compliance_policies_2" name="compliance_policies" value="2"/>
                                    <label class="form-check-label" for="compliance_policies_2">
                                    2) Employee has committed an infraction or was suspended during the rating period and needs close supervision or guidance;Often late for work and shows
                                    little concern for time loast from work; does not observe break periods strickly
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="compliance_policies_3" name="compliance_policies" value="3"/>
                                    <label class="form-check-label" for="compliance_policies_3">
                                    3) Employee basically follows all rules; has not committed any infraction meriting a desciplinary measure, e,g. oral or written warning; Attendance is regular
                                    and comes to work on time; absents himself only when necessary; observes breat time priods.
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="compliance_policies_4" name="compliance_policies" value="4"/>
                                    <label class="form-check-label" for="compliance_policies_4">
                                    4) Employee has no record of violations since the start of employment exemplary conduct at all times; highly repected and trusted personal ethics; Very good to perfect
                                    attendance; rarely absent or late and stricly observes break time periods.
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="compliance_policies_5" name="compliance_policies" value="5"/>
                                    <label class="form-check-label" for="compliance_policies_5">
                                    5) Employee has no record of violations since the start of employment exemplary conduct at all times; highly repected and trusted personal ethics; Very good to perfect
                                    attendance; rarely absent or late and stricly observes break time periods.
                                    </label>
                                </div>
                                <textarea class="form-control"  rows="3" placeholder="Remarks"></textarea>
                            </div>
                        </div>

                        <h4>Result Assessment</h4>

                        <div class="card">
                            <div class="card-body">
                                <textarea class="form-control"  rows="3" placeholder="Accomplishment 1:"></textarea>
                                <div class="form-check mb-2 mt-2">
                                    <input class="form-check-input" type="radio" id="accomplishment" name="accomplishment[]" value="1"/>
                                    <label class="form-check-label" for="accomplishment">
                                    1) <strong>Low Impact</strong> The Efficiency or effectiveness of operations remained the same or improve only minimaly The equality of products remained the same or improved only minimaly
                                    </label>
                                </div>
                                <div class="form-check mb-2 mt-2">
                                    <input class="form-check-input" type="radio" id="accomplishment_2" name="accomplishment[]" value="2"/>
                                    <label class="form-check-label" for="accomplishment_2">
                                    2) <strong>Low Impact</strong> The Efficiency or effectiveness of operations remained the same or improve only minimaly The equality of products remained the same or improved only minimaly
                                    </label>
                                </div>
                                <div class="form-check mb-2 mt-2">
                                    <input class="form-check-input" type="radio" id="accomplishment_3" name="accomplishment[]" value="3"/>
                                    <label class="form-check-label" for="accomplishment_3">
                                    3) <strong>Moderate Impact</strong> The efficiency or effectiveness of operations improved quite a lot. The quality of products improved quite a lot/
                                    </label>
                                </div>
                                <div class="form-check mb-2 mt-2">
                                    <input class="form-check-input" type="radio" id="accomplishment_4" name="accomplishment[]" value="4"/>
                                    <label class="form-check-label" for="accomplishment_4">
                                    4) <strong>High Impact</strong> The Efficiency of operations improved tremendously. The Quality of products
                                    </label>
                                </div>
                                <div class="form-check mb-2 mt-2">
                                    <input class="form-check-input" type="radio" id="accomplishment_5" name="accomplishment[]" value="5"/>
                                    <label class="form-check-label" for="accomplishment_5">
                                    5) <strong>High Impact</strong> The Efficiency of operations improved tremendously. The Quality of products
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <textarea class="form-control"  rows="3" placeholder="Narrative"></textarea>
                            </div>
                        </div>