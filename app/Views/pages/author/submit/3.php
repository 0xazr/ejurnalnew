<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
            <div id="breadcrumb">
               <a href="/index">Home</a> &gt;
               <a href="/user" class="hierarchyLink">User</a> &gt;
               <a href="/author" class="hierarchyLink">Author</a> &gt;
               <a href="/author" class="hierarchyLink">Submissions</a> &gt;
               <a href="/author/submit/3/<?= $submission_id; ?>" class="current">New Submission</a>
            </div>
            <h2>Step 3. Entering the Submission's Metadata</h2>
            <div id="content">
               <ul class="steplist">
                  <li id="step1" ><a href="/author/submit/1/<?= $submission_id; ?>">1. Start</a></li>
                  <li id="step2" ><a href="/author/submit/2/<?= $submission_id; ?>">2. Upload Submission</a></li>
                  <li id="step3"  class="current">3. Enter Metadata</li>
                  <li id="step4" >4. Upload Supplementary Files</li>
                  <li id="step5" >5. Confirmation</li>
               </ul>
               <div class="separator"></div>
               <form name="addArticle" method="post" action="/author/saveSubmit/3/<?= $submission_id; ?>">
                  <input type="hidden" name="article[articleId]" value="<?php if(isset($article['id_article'])) echo $article['id_article']; ?>" />
                  <div id="authors">
                     <h3>Authors</h3>
                     <input type="hidden" name="deletedAuthors" value="" />
                     <input type="hidden" name="moveAuthor" value="0" />
                     <input type="hidden" name="moveAuthorDir" value="" />
                     <input type="hidden" name="moveAuthorIndex" value="" />
                     <input type="hidden" name="authors[0][authorId]" value="<?php if(isset($author['id_author'])) echo $author['id_author']; ?>" />
                     <input type="hidden" name="authors[0][seq]" value="1" />
                     <input type="hidden" name="primaryContact" value="0" />
                     <table width="100%" class="data">
                        <tr valign="top">
                           <td width="20%" class="label">
                              <label for="authors-0-firstName" >
                              First Name *</label>
                           </td>
                           <td width="80%" class="value"><input type="text" class="textField" name="authors[0][firstName]" id="authors-0-firstName" value="<?php if(isset($author['id_author'])) echo $author['first_name']; else echo 'First Name'; ?>" size="20" maxlength="40" /></td>
                        </tr>
                        <tr valign="top">
                           <td width="20%" class="label">
                              <label for="authors-0-middleName" >
                              Middle Name </label>
                           </td>
                           <td width="80%" class="value"><input type="text" class="textField" name="authors[0][middleName]" id="authors-0-middleName" value="<?php if(isset($author['id_author'])) echo $author['middle_name'] ?>" size="20" maxlength="40" /></td>
                        </tr>
                        <tr valign="top">
                           <td width="20%" class="label">
                              <label for="authors-0-lastName" >
                              Last Name *</label>
                           </td>
                           <td width="80%" class="value"><input type="text" class="textField" name="authors[0][lastName]" id="authors-0-lastName" value="<?php if(isset($author['id_author'])) echo $author['last_name']; else echo 'Last Name'; ?>" size="20" maxlength="90" /></td>
                        </tr>
                        <tr valign="top">
                           <td width="20%" class="label">
                              <label for="authors-0-email" >
                              Email *</label>
                           </td>
                           <td width="80%" class="value"><input type="text" class="textField" name="authors[0][email]" id="authors-0-email" value="<?php if(isset($author['id_author'])) echo $author['email']; ?>" size="30" maxlength="90" /></td>
                        </tr>
                        <tr valign="top">
                           <td class="label">
                              <label for="authors-0-url" >
                              URL </label>
                           </td>
                           <td class="value"><input type="text" name="authors[0][url]" id="authors-0-url" value="<?php if(isset($author['id_author'])) echo $author['url']; ?>" size="30" maxlength="255" class="textField" /></td>
                        </tr>
                        <tr valign="top">
                           <td width="20%" class="label">
                              <label for="authors-0-affiliation" >
                              Affiliation </label>
                           </td>
                           <td width="80%" class="value">
                              <textarea name="authors[0][affiliation]" class="textArea" id="authors-0-affiliation" rows="5" cols="40"><?php if(isset($author['id_author'])) echo $author['affiliation']; ?></textarea><br/>
                              <span class="instruct">(Your institution, e.g. "Simon Fraser University")</span>
                           </td>
                        </tr>
                        <tr valign="top">
                           <td width="20%" class="label">
                              <label for="authors-0-country" >
                              Country </label>
                           </td>
                           <td width="80%" class="value">
                              <select name="authors[0][country]" id="authors-0-country" class="selectMenu">
                                 <option value=""></option>
                                 <option label="Afghanistan" value="AF">Afghanistan</option>
                                 <option label="Albania" value="AL">Albania</option>
                                 <option label="Algeria" value="DZ">Algeria</option>
                                 <option label="American Samoa" value="AS">American Samoa</option>
                                 <option label="Andorra" value="AD">Andorra</option>
                                 <option label="Angola" value="AO">Angola</option>
                                 <option label="Anguilla" value="AI">Anguilla</option>
                                 <option label="Antarctica" value="AQ">Antarctica</option>
                                 <option label="Antigua and Barbuda" value="AG">Antigua and Barbuda</option>
                                 <option label="Argentina" value="AR">Argentina</option>
                                 <option label="Armenia" value="AM">Armenia</option>
                                 <option label="Aruba" value="AW">Aruba</option>
                                 <option label="Australia" value="AU">Australia</option>
                                 <option label="Austria" value="AT">Austria</option>
                                 <option label="Azerbaijan" value="AZ">Azerbaijan</option>
                                 <option label="Bahamas" value="BS">Bahamas</option>
                                 <option label="Bahrain" value="BH">Bahrain</option>
                                 <option label="Bangladesh" value="BD">Bangladesh</option>
                                 <option label="Barbados" value="BB">Barbados</option>
                                 <option label="Belarus" value="BY">Belarus</option>
                                 <option label="Belgium" value="BE">Belgium</option>
                                 <option label="Belize" value="BZ">Belize</option>
                                 <option label="Benin" value="BJ">Benin</option>
                                 <option label="Bermuda" value="BM">Bermuda</option>
                                 <option label="Bhutan" value="BT">Bhutan</option>
                                 <option label="Bolivia, Plurinational State of" value="BO">Bolivia, Plurinational State of</option>
                                 <option label="Bosnia and Herzegovina" value="BA">Bosnia and Herzegovina</option>
                                 <option label="Botswana" value="BW">Botswana</option>
                                 <option label="Bouvet Island" value="BV">Bouvet Island</option>
                                 <option label="Brazil" value="BR">Brazil</option>
                                 <option label="British Indian Ocean Territory" value="IO">British Indian Ocean Territory</option>
                                 <option label="Brunei Darussalam" value="BN">Brunei Darussalam</option>
                                 <option label="Bulgaria" value="BG">Bulgaria</option>
                                 <option label="Burkina Faso" value="BF">Burkina Faso</option>
                                 <option label="Burundi" value="BI">Burundi</option>
                                 <option label="Cambodia" value="KH">Cambodia</option>
                                 <option label="Cameroon" value="CM">Cameroon</option>
                                 <option label="Canada" value="CA">Canada</option>
                                 <option label="Cape Verde" value="CV">Cape Verde</option>
                                 <option label="Cayman Islands" value="KY">Cayman Islands</option>
                                 <option label="Central African Republic" value="CF">Central African Republic</option>
                                 <option label="Chad" value="TD">Chad</option>
                                 <option label="Chile" value="CL">Chile</option>
                                 <option label="China" value="CN">China</option>
                                 <option label="Christmas Island" value="CX">Christmas Island</option>
                                 <option label="Cocos (Keeling) Islands" value="CC">Cocos (Keeling) Islands</option>
                                 <option label="Colombia" value="CO">Colombia</option>
                                 <option label="Comoros" value="KM">Comoros</option>
                                 <option label="Congo" value="CG">Congo</option>
                                 <option label="Congo, the Democratic Republic of the" value="CD">Congo, the Democratic Republic of the</option>
                                 <option label="Cook Islands" value="CK">Cook Islands</option>
                                 <option label="Costa Rica" value="CR">Costa Rica</option>
                                 <option label="Croatia" value="HR">Croatia</option>
                                 <option label="Cuba" value="CU">Cuba</option>
                                 <option label="Cyprus" value="CY">Cyprus</option>
                                 <option label="Czech Republic" value="CZ">Czech Republic</option>
                                 <option label="Côte d'Ivoire" value="CI">Côte d'Ivoire</option>
                                 <option label="Denmark" value="DK">Denmark</option>
                                 <option label="Djibouti" value="DJ">Djibouti</option>
                                 <option label="Dominica" value="DM">Dominica</option>
                                 <option label="Dominican Republic" value="DO">Dominican Republic</option>
                                 <option label="Ecuador" value="EC">Ecuador</option>
                                 <option label="Egypt" value="EG">Egypt</option>
                                 <option label="El Salvador" value="SV">El Salvador</option>
                                 <option label="Equatorial Guinea" value="GQ">Equatorial Guinea</option>
                                 <option label="Eritrea" value="ER">Eritrea</option>
                                 <option label="Estonia" value="EE">Estonia</option>
                                 <option label="Ethiopia" value="ET">Ethiopia</option>
                                 <option label="Falkland Islands (Malvinas)" value="FK">Falkland Islands (Malvinas)</option>
                                 <option label="Faroe Islands" value="FO">Faroe Islands</option>
                                 <option label="Fiji" value="FJ">Fiji</option>
                                 <option label="Finland" value="FI">Finland</option>
                                 <option label="France" value="FR">France</option>
                                 <option label="French Guiana" value="GF">French Guiana</option>
                                 <option label="French Polynesia" value="PF">French Polynesia</option>
                                 <option label="French Southern Territories" value="TF">French Southern Territories</option>
                                 <option label="Gabon" value="GA">Gabon</option>
                                 <option label="Gambia" value="GM">Gambia</option>
                                 <option label="Georgia" value="GE">Georgia</option>
                                 <option label="Germany" value="DE">Germany</option>
                                 <option label="Ghana" value="GH">Ghana</option>
                                 <option label="Gibraltar" value="GI">Gibraltar</option>
                                 <option label="Greece" value="GR">Greece</option>
                                 <option label="Greenland" value="GL">Greenland</option>
                                 <option label="Grenada" value="GD">Grenada</option>
                                 <option label="Guadeloupe" value="GP">Guadeloupe</option>
                                 <option label="Guam" value="GU">Guam</option>
                                 <option label="Guatemala" value="GT">Guatemala</option>
                                 <option label="Guernsey" value="GG">Guernsey</option>
                                 <option label="Guinea" value="GN">Guinea</option>
                                 <option label="Guinea-Bissau" value="GW">Guinea-Bissau</option>
                                 <option label="Guyana" value="GY">Guyana</option>
                                 <option label="Haiti" value="HT">Haiti</option>
                                 <option label="Heard Island and McDonald Islands" value="HM">Heard Island and McDonald Islands</option>
                                 <option label="Holy See (Vatican City State)" value="VA">Holy See (Vatican City State)</option>
                                 <option label="Honduras" value="HN">Honduras</option>
                                 <option label="Hong Kong" value="HK">Hong Kong</option>
                                 <option label="Hungary" value="HU">Hungary</option>
                                 <option label="Iceland" value="IS">Iceland</option>
                                 <option label="India" value="IN">India</option>
                                 <option label="Indonesia" value="ID">Indonesia</option>
                                 <option label="Iran, Islamic Republic of" value="IR">Iran, Islamic Republic of</option>
                                 <option label="Iraq" value="IQ">Iraq</option>
                                 <option label="Ireland" value="IE">Ireland</option>
                                 <option label="Isle of Man" value="IM">Isle of Man</option>
                                 <option label="Israel" value="IL">Israel</option>
                                 <option label="Italy" value="IT">Italy</option>
                                 <option label="Jamaica" value="JM">Jamaica</option>
                                 <option label="Japan" value="JP">Japan</option>
                                 <option label="Jersey" value="JE">Jersey</option>
                                 <option label="Jordan" value="JO">Jordan</option>
                                 <option label="Kazakhstan" value="KZ">Kazakhstan</option>
                                 <option label="Kenya" value="KE">Kenya</option>
                                 <option label="Kiribati" value="KI">Kiribati</option>
                                 <option label="Korea, Democratic People's Republic of" value="KP">Korea, Democratic People's Republic of</option>
                                 <option label="Korea, Republic of" value="KR">Korea, Republic of</option>
                                 <option label="Kuwait" value="KW">Kuwait</option>
                                 <option label="Kyrgyzstan" value="KG">Kyrgyzstan</option>
                                 <option label="Lao People's Democratic Republic" value="LA">Lao People's Democratic Republic</option>
                                 <option label="Latvia" value="LV">Latvia</option>
                                 <option label="Lebanon" value="LB">Lebanon</option>
                                 <option label="Lesotho" value="LS">Lesotho</option>
                                 <option label="Liberia" value="LR">Liberia</option>
                                 <option label="Libya" value="LY">Libya</option>
                                 <option label="Liechtenstein" value="LI">Liechtenstein</option>
                                 <option label="Lithuania" value="LT">Lithuania</option>
                                 <option label="Luxembourg" value="LU">Luxembourg</option>
                                 <option label="Macao" value="MO">Macao</option>
                                 <option label="Macedonia, the former Yugoslav Republic of" value="MK">Macedonia, the former Yugoslav Republic of</option>
                                 <option label="Madagascar" value="MG">Madagascar</option>
                                 <option label="Malawi" value="MW">Malawi</option>
                                 <option label="Malaysia" value="MY">Malaysia</option>
                                 <option label="Maldives" value="MV">Maldives</option>
                                 <option label="Mali" value="ML">Mali</option>
                                 <option label="Malta" value="MT">Malta</option>
                                 <option label="Marshall Islands" value="MH">Marshall Islands</option>
                                 <option label="Martinique" value="MQ">Martinique</option>
                                 <option label="Mauritania" value="MR">Mauritania</option>
                                 <option label="Mauritius" value="MU">Mauritius</option>
                                 <option label="Mayotte" value="YT">Mayotte</option>
                                 <option label="Mexico" value="MX">Mexico</option>
                                 <option label="Micronesia, Federated States of" value="FM">Micronesia, Federated States of</option>
                                 <option label="Moldova, Republic of" value="MD">Moldova, Republic of</option>
                                 <option label="Monaco" value="MC">Monaco</option>
                                 <option label="Mongolia" value="MN">Mongolia</option>
                                 <option label="Montenegro" value="ME">Montenegro</option>
                                 <option label="Montserrat" value="MS">Montserrat</option>
                                 <option label="Morocco" value="MA">Morocco</option>
                                 <option label="Mozambique" value="MZ">Mozambique</option>
                                 <option label="Myanmar" value="MM">Myanmar</option>
                                 <option label="Namibia" value="NA">Namibia</option>
                                 <option label="Nauru" value="NR">Nauru</option>
                                 <option label="Nepal" value="NP">Nepal</option>
                                 <option label="Netherlands" value="NL">Netherlands</option>
                                 <option label="Netherlands Antilles" value="AN">Netherlands Antilles</option>
                                 <option label="New Caledonia" value="NC">New Caledonia</option>
                                 <option label="New Zealand" value="NZ">New Zealand</option>
                                 <option label="Nicaragua" value="NI">Nicaragua</option>
                                 <option label="Niger" value="NE">Niger</option>
                                 <option label="Nigeria" value="NG">Nigeria</option>
                                 <option label="Niue" value="NU">Niue</option>
                                 <option label="Norfolk Island" value="NF">Norfolk Island</option>
                                 <option label="Northern Mariana Islands" value="MP">Northern Mariana Islands</option>
                                 <option label="Norway" value="NO">Norway</option>
                                 <option label="Oman" value="OM">Oman</option>
                                 <option label="Pakistan" value="PK">Pakistan</option>
                                 <option label="Palau" value="PW">Palau</option>
                                 <option label="Palestinian Territory, Occupied" value="PS">Palestinian Territory, Occupied</option>
                                 <option label="Panama" value="PA">Panama</option>
                                 <option label="Papua New Guinea" value="PG">Papua New Guinea</option>
                                 <option label="Paraguay" value="PY">Paraguay</option>
                                 <option label="Peru" value="PE">Peru</option>
                                 <option label="Philippines" value="PH">Philippines</option>
                                 <option label="Pitcairn" value="PN">Pitcairn</option>
                                 <option label="Poland" value="PL">Poland</option>
                                 <option label="Portugal" value="PT">Portugal</option>
                                 <option label="Puerto Rico" value="PR">Puerto Rico</option>
                                 <option label="Qatar" value="QA">Qatar</option>
                                 <option label="Romania" value="RO">Romania</option>
                                 <option label="Russian Federation" value="RU">Russian Federation</option>
                                 <option label="Rwanda" value="RW">Rwanda</option>
                                 <option label="Réunion" value="RE">Réunion</option>
                                 <option label="Saint Barthélemy" value="BL">Saint Barthélemy</option>
                                 <option label="Saint Helena, Ascension and Tristan da Cunha" value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                 <option label="Saint Kitts and Nevis" value="KN">Saint Kitts and Nevis</option>
                                 <option label="Saint Lucia" value="LC">Saint Lucia</option>
                                 <option label="Saint Martin (French part)" value="MF">Saint Martin (French part)</option>
                                 <option label="Saint Pierre and Miquelon" value="PM">Saint Pierre and Miquelon</option>
                                 <option label="Saint Vincent and the Grenadines" value="VC">Saint Vincent and the Grenadines</option>
                                 <option label="Samoa" value="WS">Samoa</option>
                                 <option label="San Marino" value="SM">San Marino</option>
                                 <option label="Sao Tome and Principe" value="ST">Sao Tome and Principe</option>
                                 <option label="Saudi Arabia" value="SA">Saudi Arabia</option>
                                 <option label="Senegal" value="SN">Senegal</option>
                                 <option label="Serbia" value="RS">Serbia</option>
                                 <option label="Seychelles" value="SC">Seychelles</option>
                                 <option label="Sierra Leone" value="SL">Sierra Leone</option>
                                 <option label="Singapore" value="SG">Singapore</option>
                                 <option label="Slovakia" value="SK">Slovakia</option>
                                 <option label="Slovenia" value="SI">Slovenia</option>
                                 <option label="Solomon Islands" value="SB">Solomon Islands</option>
                                 <option label="Somalia" value="SO">Somalia</option>
                                 <option label="South Africa" value="ZA">South Africa</option>
                                 <option label="South Georgia and the South Sandwich Islands" value="GS">South Georgia and the South Sandwich Islands</option>
                                 <option label="Spain" value="ES">Spain</option>
                                 <option label="Sri Lanka" value="LK">Sri Lanka</option>
                                 <option label="Sudan" value="SD">Sudan</option>
                                 <option label="Suriname" value="SR">Suriname</option>
                                 <option label="Svalbard and Jan Mayen" value="SJ">Svalbard and Jan Mayen</option>
                                 <option label="Swaziland" value="SZ">Swaziland</option>
                                 <option label="Sweden" value="SE">Sweden</option>
                                 <option label="Switzerland" value="CH">Switzerland</option>
                                 <option label="Syrian Arab Republic" value="SY">Syrian Arab Republic</option>
                                 <option label="Taiwan, Province of China" value="TW">Taiwan, Province of China</option>
                                 <option label="Tajikistan" value="TJ">Tajikistan</option>
                                 <option label="Tanzania, United Republic of" value="TZ">Tanzania, United Republic of</option>
                                 <option label="Thailand" value="TH">Thailand</option>
                                 <option label="Timor-Leste" value="TL">Timor-Leste</option>
                                 <option label="Togo" value="TG">Togo</option>
                                 <option label="Tokelau" value="TK">Tokelau</option>
                                 <option label="Tonga" value="TO">Tonga</option>
                                 <option label="Trinidad and Tobago" value="TT">Trinidad and Tobago</option>
                                 <option label="Tunisia" value="TN">Tunisia</option>
                                 <option label="Turkey" value="TR">Turkey</option>
                                 <option label="Turkmenistan" value="TM">Turkmenistan</option>
                                 <option label="Turks and Caicos Islands" value="TC">Turks and Caicos Islands</option>
                                 <option label="Tuvalu" value="TV">Tuvalu</option>
                                 <option label="Uganda" value="UG">Uganda</option>
                                 <option label="Ukraine" value="UA">Ukraine</option>
                                 <option label="United Arab Emirates" value="AE">United Arab Emirates</option>
                                 <option label="United Kingdom" value="GB">United Kingdom</option>
                                 <option label="United States" value="US">United States</option>
                                 <option label="United States Minor Outlying Islands" value="UM">United States Minor Outlying Islands</option>
                                 <option label="Uruguay" value="UY">Uruguay</option>
                                 <option label="Uzbekistan" value="UZ">Uzbekistan</option>
                                 <option label="Vanuatu" value="VU">Vanuatu</option>
                                 <option label="Venezuela, Bolivarian Republic of" value="VE">Venezuela, Bolivarian Republic of</option>
                                 <option label="Viet Nam" value="VN">Viet Nam</option>
                                 <option label="Virgin Islands, British" value="VG">Virgin Islands, British</option>
                                 <option label="Virgin Islands, U.S." value="VI">Virgin Islands, U.S.</option>
                                 <option label="Wallis and Futuna" value="WF">Wallis and Futuna</option>
                                 <option label="Western Sahara" value="EH">Western Sahara</option>
                                 <option label="Yemen" value="YE">Yemen</option>
                                 <option label="Zambia" value="ZM">Zambia</option>
                                 <option label="Zimbabwe" value="ZW">Zimbabwe</option>
                                 <option label="Åland Islands" value="AX">Åland Islands</option>
                              </select>
                           </td>
                        </tr>
                        <tr valign="top">
                           <td width="20%" class="label">
                              <label for="authors-0-biography" >
                              Bio Statement </label>
                              <br />(E.g., department and rank)
                           </td>
                           <td width="80%" class="value"><textarea name="authors[0][biography]" class="textArea" id="authors-0-biography" rows="5" cols="40"><?php if(isset($author['id_author'])) echo $author['bio_statement']; ?></textarea></td>
                        </tr>
                     </table>
                  </div>
               <div class="separator"></div>
               <div id="titleAndAbstract">
                  <h3>Title and Abstract</h3>
                  <table width="100%" class="data">
                     <tr valign="top">
                        <td width="20%" class="label">
                           <label for="title" >
                           Title *</label>
                        </td>
                        <td width="80%" class="value"><input type="text" class="textField" name="article[title]" id="title" value="<?php if(isset($article['id_article'])) echo $article['title']; ?>" size="60" maxlength="255" /></td>
                     </tr>
                     <tr valign="top">
                        <td width="20%" class="label">
                           <label for="abstract" >
                           Abstract *</label>
                        </td>
                        <td width="80%" class="value"><textarea name="article[abstract]" id="abstract" class="textArea" rows="15" cols="60"><?php if(isset($article['id_article'])) echo $article['abstract']; ?></textarea></td>
                     </tr>
                  </table>
               </div>
               <div class="separator"></div>
               <div id="indexing">
                  <h3>Indexing</h3>
                  <p>Provide terms for indexing the submission; separate terms with a semi-colon (term1; term2; term3).</p>
                  <table width="100%" class="data">
                     <tr valign="top">
                        <td rowspan="2" width="20%" class="label">
                           <label for="subject" >
                           Keywords </label>
                        </td>
                        <td width="80%" class="value"><input type="text" class="textField" name="article[keyword]" id="subject" value="<?php if(isset($article['id_article'])) echo $article['keyword']; ?>" size="40" maxlength="255" /></td>
                     </tr>
                     <tr valign="top">
                        <td><span class="instruct">Photosynthesis; Black Holes; Four-Color Map Problem; Bayesian Theory</span></td>
                     </tr>
                     <tr valign="top">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                     </tr>
                     <tr valign="top">
                        <td rowspan="2" width="20%" class="label">
                           <label for="language" >
                           Language </label>
                        </td>
                        <td width="80%" class="value"><input type="text" class="textField" name="article[language]" id="language" value="<?php if(isset($article['id_article'])) echo $article['language']; else echo 'en'; ?>" size="5" maxlength="10" /></td>
                     </tr>
                     <tr valign="top">
                        <td><span class="instruct">English=en; French=fr; Spanish=es. <a href="http://www.loc.gov/standards/iso639-2/php/code_list.php" target="_blank">Additional codes</a>.</span></td>
                     </tr>
                  </table>
               </div>
               <div class="separator"></div>
               <!-- <div id="submissionSupportingAgencies">
                  <h3>Contributors and Supporting Agencies</h3>
                  <p>Identify agencies (a person, an organization, or a service) that made contributions to the content or provided funding or support for the work presented in this submission. Separate them with a semi-colon (e.g. John Doe, Metro University; Master University, Department of Computer Science).</p>
                  <table width="100%" class="data">
                     <tr valign="top">
                        <td width="20%" class="label">
                           <label for="sponsor" >
                           Agencies </label>
                        </td>
                        <td width="80%" class="value"><input type="text" class="textField" name="sponsor[en_US]" id="sponsor" value="" size="60" maxlength="255" /></td>
                     </tr>
                  </table>
               </div>
               <div class="separator"></div> -->
               <div id="metaCitations">
                  <h3>References</h3>
                  <p>Provide a formatted list of references for works cited in this submission. Please separate individual references with a blank line.</p>
                  <table width="100%" class="data">
                     <tr valign="top">
                        <td width="20%" class="label">
                           <label for="article[references]" >
                           References </label>
                        </td>
                        <td width="80%" class="value"><textarea name="article[references]" id="citations" class="textArea" rows="15" cols="60"><?php if(isset($article['id_article'])) echo $article['references']; ?></textarea></td>
                     </tr>
                  </table>
                  <div class="separator"></div>
               </div>
               <p><input type="submit" name="submitArticle" value="Save and continue" class="button defaultButton" /> <input type="button" value="Cancel" class="button" onclick="confirmAction('/author', 'You can complete this submission at a later date by selecting Active Submissions from the Author home.')" /></p>
               <p><span class="formRequired">* Denotes required field</span></p>
            </form>
         </div>

<?= $this->endSection(); ?>