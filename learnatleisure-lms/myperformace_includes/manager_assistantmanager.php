<h3>Managers/Assistant Managers</h3>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3 mb-1">
                                        <label for="select_department" class="form-label">Select Department</label>
                                        <select id="select_department" class="form-select">
                                            <option selected disabled>Select Department</option>
                                            <?php foreach ($result_department as $row) : ?>
                                            <option value="<?php echo escape($row['department_id']);?>"><?php echo escape($row['department_name']);?></option>
                                            <?php endforeach?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 mb-1">
                                        <label for="select_employee" class="form-label">Employee Name</label>
                                        <select id="select_employee" class="form-select">
                                            <option selected disabled>Select Employee</option>
                                            <option value="Cabatuan">Kent</option>
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
                                <h5>A. Leadership</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="job_kownledge_1" name="job_nowledge" value="1"/>
                                    <label class="form-check-label" for="job_kownledge_1">
                                    1) Leadership potential is present but still needs guidance in giving a clear vision , direction and motivation towards employees;lacking in self motivation
                                    ;needs to work on being a positive role model to everyone
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="job_kownledge_2" name="job_nowledge" value="2"/>
                                    <label class="form-check-label" for="job_kownledge_2">
                                    2) Leadership potential is present but still needs guidance in giving a clear vision , direction and motivation towards employees;lacking in self motivation
                                    ;needs to work on being a positive role model to everyone
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="job_kownledge_3" name="job_nowledge" value="3"/>
                                    <label class="form-check-label" for="job_kownledge_3">
                                    3) Provides clear vision,direction and motivation in achieving established goals; Effective in integrating diverse conditions, cultures, personalities, resources,
                                    and shifting priorities to persue business goals and objectives
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="job_kownledge_4" name="job_nowledge" value="4"/>
                                    <label class="form-check-label" for="job_kownledge_4">
                                    4) Inspires and guides individuals towards higher levels of performance; treats people with respect, dignity and fairness while creating a culture of excellence leads 
                                    with integrity honestly and courage		
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="job_kownledge_5" name="job_nowledge" value="5"/>
                                    <label class="form-check-label" for="job_kownledge_5">
                                    5) Inspires and guides individuals towards higher levels of performance; treats people with respect, dignity and fairness while creating a culture of excellence leads 
                                    with integrity honestly and courage		
                                    </label>
                                </div>
                                <textarea class="form-control"  rows="3" placeholder="Remarks"></textarea>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>B. Teamwork</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="quality_work_1" name="quality_work" value="1"/>
                                    <label class="form-check-label" for="quality_work_1">
                                    1) Has shown lack of cooperation in the team; percieved more as an individual player and not a team player; Needs to improve skills in collaborating and working with others
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="quality_work_2" name="quality_work" value="2"/>
                                    <label class="form-check-label" for="quality_work_2">
                                    2) Has shown lack of cooperation in the team; percieved more as an individual player and not a team player; Needs to improve skills in collaborating and working with others
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="quality_work_3" name="quality_work" value="3"/>
                                    <label class="form-check-label" for="quality_work_3">
                                    3) Interacts effectively and maintains positive relationship with peers, subordinates and guests, assist others to attain group work objectives;Participates effectively as full member
                                    of a team in whatever capacity. Coordinates teams and gains the cooperation to others 
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="quality_work_4" name="quality_work" value="4"/>
                                    <label class="form-check-label" for="quality_work_4">
                                    4) Encourages collaboration and sharing information and easily cooperates with employees outside of the department respects the rights of the other people and shows a tremendously inspiring
                                    cooperative spirit in the workplace
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="quality_work_5" name="quality_work" value="5"/>
                                    <label class="form-check-label" for="quality_work_5">
                                    5) Encourages collaboration and sharing information and easily cooperates with employees outside of the department respects the rights of the other people and shows a tremendously inspiring
                                    cooperative spirit in the workplace
                                    </label>
                                </div>
                                <textarea class="form-control"  rows="3" placeholder="Remarks"></textarea>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>C. People Development</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="dependability_1" name="dependability_reliability" value="1"/>
                                    <label class="form-check-label" for="dependability_1">
                                    1) Inadequate to average skills in handling and developing the skills of people; Often fails to respond to the needs of the skills of employees and guest; fails motivate
                                    people and tap their potential; often unable to share knowledge and skills to subordinates
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="dependability_2" name="dependability_reliability" value="2"/>
                                    <label class="form-check-label" for="dependability_2">
                                    2) Inadequate to average skills in handling and developing the skills of people; Often fails to respond to the needs of the skills of employees and guest; fails motivate
                                    people and tap their potential; often unable to share knowledge and skills to subordinates
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="dependability_3" name="dependability_reliability" value="3"/>
                                    <label class="form-check-label" for="dependability_3">
                                    3) Enhances skills, capabilities and values of subordinates to attude them to corporate values and objectives; Creates a positive environment to draw out the best in people;
                                    A good guide and motivator of individuals and groups in achieving objcetives
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="dependability_4" name="dependability_reliability" value="4"/>
                                    <label class="form-check-label" for="dependability_4">
                                    4) Known to be an expert in developing people, tapping their skills and capabilities; motivates and inspires not only sub ordinates but other employees as well; use positive reinforcement
                                    and treats others with upmost respect and understanding 
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="dependability_5" name="dependability_reliability" value="5"/>
                                    <label class="form-check-label" for="dependability_5">
                                    5) Known to be an expert in developing people, tapping their skills and capabilities; motivates and inspires not only sub ordinates but other employees as well; use positive reinforcement
                                    and treats others with upmost respect and understanding 
                                    </label>
                                </div>
                                <textarea class="form-control"  rows="3" placeholder="Remarks"></textarea>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>D. Guest Service Orientation</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="humanrelation_1" name="human_relation" value="1"/>
                                    <label class="form-check-label" for="humanrelation_1">
                                    1) Lacks proactive approach in responding quickly to meet the internal or external customers needs; needs further orientation on the importance of guest service orientation in the industry;
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="humanrelation_2" name="human_relation" value="2"/>
                                    <label class="form-check-label" for="humanrelation_2">
                                    2) Lacks proactive approach in responding quickly to meet the internal or external customers needs; needs further orientation on the importance of guest service orientation in the industry;
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="humanrelation_3" name="human_relation" value="3"/>
                                    <label class="form-check-label" for="humanrelation_3">
                                    3) Delivers quality service which meets or exceeds internal or external customer expectations; Satisfies internal or external customer needs in the shortest
                                    time possible; Effective in developing measures or anticipate internal or external customer needs 
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="humanrelation_4" name="human_relation" value="4"/>
                                    <label class="form-check-label" for="humanrelation_4">
                                    4) Actively seeks information to understand guests circumstances, problems, needs and expectations; Constatntly seeks opportunities to improve the services to meet guest's
                                    needs;Delivering quality service is always consistent for internal and/or external customers 
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="humanrelation_5" name="human_relation" value="5"/>
                                    <label class="form-check-label" for="humanrelation_5">
                                    5) Actively seeks information to understand guests circumstances, problems, needs and expectations; Constatntly seeks opportunities to improve the services to meet guest's
                                    needs;Delivering quality service is always consistent for internal and/or external customers 
                                    </label>
                                </div>
                                <textarea class="form-control"  rows="3" placeholder="Remarks"></textarea>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>E. Communications</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="compliance_policies_1" name="compliance_policies" value="1"/>
                                    <label class="form-check-label" for="compliance_policies_1">
                                    1) Inadequate to average display of oral and/or written communication skills required by the position; Average ability in listening and understanding information; thoughts 
                                    are sometimes unclear and disorganized; may fail to communicate informcation in a timely manner
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="compliance_policies_2" name="compliance_policies" value="2"/>
                                    <label class="form-check-label" for="compliance_policies_2">
                                    2) Inadequate to average display of oral and/or written communication skills required by the position; Average ability in listening and understanding information; thoughts 
                                    are sometimes unclear and disorganized; may fail to communicate informcation in a timely manner
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="compliance_policies_3" name="compliance_policies" value="3"/>
                                    <label class="form-check-label" for="compliance_policies_3">
                                    3) Conveys ideas clearly by using approriate language and manner to ensure people understands the message; covers oral communication; oral presentation listening and written communication
                                    ;Influences decision-making taking into account the position of the other party to arrive at mutually acceptable outcome
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
                                    5) Communications are exeptionally effective, timely well organized,articulate and convincing manner, whether oral or written. Excellent listener and values 2- way
                                    communication to achieve organizational goal effectively
                                    </label>
                                </div>
                                <textarea class="form-control"  rows="3" placeholder="Remarks"></textarea>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>F. Planning, Organizing, Controlling</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="planning_org_1" name="planning_org" value="1"/>
                                    <label class="form-check-label" for="planning_org_1">
                                    1) Insufficient planning for most tasks and can plan for routine task only; generally needs further guidance in establishing organizational structures; finds
                                    it challange to develop plans, meet deadlines, define goals and procedures and monitor performance 
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="planning_org_2" name="planning_org" value="2"/>
                                    <label class="form-check-label" for="planning_org_2">
                                    2) Insufficient planning for most tasks and can plan for routine task only; generally needs further guidance in establishing organizational structures; finds
                                    it challange to develop plans, meet deadlines, define goals and procedures and monitor performance 
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="planning_org_3" name="planning_org" value="3"/>
                                    <label class="form-check-label" for="planning_org_3">
                                    3) Creates a strategy based on historical / empirical data and defines business goals and objectives accordingly; Establishes appropriate organizational structures and systems
                                    to achieve objectives; Develops and measures performance standards according to established Hotel's objectives and monitoring systems 
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="planning_org_4" name="planning_org" value="4"/>
                                    <label class="form-check-label" for="planning_org_4">
                                    4) Planning shows anticipation and probable solution to potential problems; Excellent in establishing systems and structures in achieving the organization's objevtives.
                                    Effectively implements performance standards set and makes use of it in achieving the hotel's goals and targets
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="planning_org_5" name="planning_org" value="5"/>
                                    <label class="form-check-label" for="planning_org_5">
                                    5) Planning shows anticipation and probable solution to potential problems; Excellent in establishing systems and structures in achieving the organization's objevtives.
                                    Effectively implements performance standards set and makes use of it in achieving the hotel's goals and targets
                                    </label>
                                </div>
                                <textarea class="form-control"  rows="3" placeholder="Remarks"></textarea>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>G. Judgement and Decision Making</h5>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="jugment_1" name="jugment" value="1"/>
                                    <label class="form-check-label" for="jugment_1">
                                    1) Needs further guidance in improving analytical abilities and judgement. Decisions usually reflect basic analytic descisions only. Often afraid taking responsibility
                                    in his/her actions. Doesn't facilitate problem resolution
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="jugment_2" name="jugment" value="2"/>
                                    <label class="form-check-label" for="jugment_2">
                                    2) Needs further guidance in improving analytical abilities and judgement. Decisions usually reflect basic analytic descisions only. Often afraid taking responsibility
                                    in his/her actions. Doesn't facilitate problem resolution
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="jugment_3" name="jugment" value="3"/>
                                    <label class="form-check-label" for="jugment_3">
                                    3) Effective identifying causes of problems and analyses available information to develop effective solutions; Makes rational and realistic decisions based on logical assumptions
                                    and considerations for practical constraints and other implication; Owns responsibility for consequences for decisions made
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="jugment_4" name="jugment" value="4"/>
                                    <label class="form-check-label" for="jugment_4">
                                    4) Exellent in developing sound, practical and workable solutions recognizes well when a decision is necessary; asking for input making descision and providing information and feedback
                                    in a timely manner and takes reponsibility well for consequences of decisions made
                                    </label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" id="jugment_5" name="jugment" value="5"/>
                                    <label class="form-check-label" for="jugment_5">
                                    5) Exellent in developing sound, practical and workable solutions recognizes well when a decision is necessary; asking for input making descision and providing information and feedback
                                    in a timely manner and takes reponsibility well for consequences of decisions made
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