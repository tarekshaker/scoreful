@extends('layouts/layoutMaster')

@section('title', 'Selects and tags - Forms')

<!-- Vendor Styles -->
@section('vendor-style')
@vite(['resources/assets/vendor/libs/select2/select2.scss', 'resources/assets/vendor/libs/tagify/tagify.scss',
'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss',
'resources/assets/vendor/libs/typeahead-js/typeahead.scss'])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite(['resources/assets/vendor/libs/select2/select2.js', 'resources/assets/vendor/libs/tagify/tagify.js',
'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js',
'resources/assets/vendor/libs/typeahead-js/typeahead.js', 'resources/assets/vendor/libs/bloodhound/bloodhound.js'])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/forms-selects.js', 'resources/assets/js/forms-tagify.js',
'resources/assets/js/forms-typeahead.js'])
@endsection

@section('content')
<div class="row g-6">
  <!-- Select2 -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Select2</h5>
      <div class="card-body">
        <div class="row g-6">
          <!-- Basic -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="select2Basic" class="select2 form-select" data-allow-clear="true">
                <option value="AK">Alaska</option>
                <option value="HI">Hawaii</option>
                <option value="CA">California</option>
                <option value="NV">Nevada</option>
                <option value="OR">Oregon</option>
                <option value="WA">Washington</option>
                <option value="AZ">Arizona</option>
                <option value="CO">Colorado</option>
                <option value="ID">Idaho</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NM">New Mexico</option>
                <option value="ND">North Dakota</option>
                <option value="UT">Utah</option>
                <option value="WY">Wyoming</option>
                <option value="AL">Alabama</option>
                <option value="AR">Arkansas</option>
                <option value="IL">Illinois</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="OK">Oklahoma</option>
                <option value="SD">South Dakota</option>
                <option value="TX">Texas</option>
                <option value="TN">Tennessee</option>
                <option value="WI">Wisconsin</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="IN">Indiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="OH">Ohio</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WV">West Virginia</option>
              </select>
              <label for="select2Basic" class="form-label">Basic</label>
            </div>
          </div>
          <!-- Multiple -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="select2Multiple" class="select2 form-select" multiple>
                <optgroup label="Alaskan/Hawaiian Time Zone">
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </optgroup>
                <optgroup label="Pacific Time Zone">
                  <option value="CA">California</option>
                  <option value="NV">Nevada</option>
                  <option value="OR">Oregon</option>
                  <option value="WA">Washington</option>
                </optgroup>
                <optgroup label="Mountain Time Zone">
                  <option value="AZ">Arizona</option>
                  <option value="CO" selected>Colorado</option>
                  <option value="ID">Idaho</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NM">New Mexico</option>
                  <option value="ND">North Dakota</option>
                  <option value="UT">Utah</option>
                  <option value="WY">Wyoming</option>
                </optgroup>
                <optgroup label="Central Time Zone">
                  <option value="AL">Alabama</option>
                  <option value="AR">Arkansas</option>
                  <option value="IL">Illinois</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="OK">Oklahoma</option>
                  <option value="SD">South Dakota</option>
                  <option value="TX">Texas</option>
                  <option value="TN">Tennessee</option>
                  <option value="WI">Wisconsin</option>
                </optgroup>
                <optgroup label="Eastern Time Zone">
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="FL" selected>Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="IN">Indiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="OH">Ohio</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WV">West Virginia</option>
                </optgroup>
              </select>
              <label for="select2Multiple" class="form-label">Multiple</label>
            </div>
          </div>
          <!-- Disabled -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="select2Disabled" class="select2 form-select" disabled>
                <option value="1">Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
              <label for="select2Disabled" class="form-label">Disabled</label>
            </div>
          </div>
          <!-- Icons -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="select2Icons" class="select2-icons form-select">
                <optgroup label="Services">
                  <option value="wordpress2" data-icon="icon-base ri ri-wordpress-fill" selected>WordPress</option>
                  <option value="codepen" data-icon="icon-base ri ri-codepen-line">Codepen</option>
                  <option value="drupal" data-icon="icon-base ri ri-drop-fill">Drupal</option>
                  <option value="pinterest2" data-icon="icon-base ri ri-css3-fill">CSS3</option>
                  <option value="html5" data-icon="icon-base ri ri-html5-fill">HTML5</option>
                </optgroup>
                <optgroup label="File types">
                  <option value="pdf" data-icon="icon-base ri ri-file-pdf-2-line">PDF</option>
                  <option value="word" data-icon="icon-base ri ri-file-word-line">Word</option>
                  <option value="excel" data-icon="icon-base ri ri-file-cloud-line">JSON</option>
                  <option value="facebook" data-icon="icon-base ri ri-facebook-circle-fill">Facebook</option>
                </optgroup>
                <optgroup label="Browsers">
                  <option value="chrome" data-icon="icon-base ri ri-chrome-line">Chrome</option>
                  <option value="firefox" data-icon="icon-base ri ri-firefox-fill">Firefox</option>
                  <option value="safari" data-icon="icon-base ri ri-edge-new-fill">Edge</option>
                  <option value="opera" data-icon="icon-base ri ri-opera-fill">Opera</option>
                  <option value="IE" data-icon="icon-base ri ri-edge-fill">IE</option>
                </optgroup>
              </select>
              <label for="select2Icons" class="form-label">Icons</label>
            </div>
          </div>
          <!-- Colors -->
          <!-- Primary -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline select2-primary">
              <select id="select2Primary" class="select2 form-select" multiple>
                <option value="1" selected>Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
              <label for="select2Primary">Primary</label>
            </div>
          </div>
          <!-- Success -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline select2-success">
              <select id="select2Success" class="select2 form-select" multiple>
                <option value="1" selected>Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
              <label for="select2Success">Success</label>
            </div>
          </div>
          <!-- Info -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline select2-info">
              <select id="select2Info" class="select2 form-select" multiple>
                <option value="1" selected>Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
              <label for="select2Info">Info</label>
            </div>
          </div>
          <!-- Warning -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline select2-warning">
              <select id="select2Warning" class="select2 form-select" multiple>
                <option value="1" selected>Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
              <label for="select2Warning">Warning</label>
            </div>
          </div>
          <!-- Danger -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline select2-danger">
              <select id="select2Danger" class="select2 form-select" multiple>
                <option value="1" selected>Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
              <label for="select2Danger">Danger</label>
            </div>
          </div>
          <!-- Dark -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline select2-dark">
              <select id="select2Dark" class="select2 form-select" multiple>
                <option value="1" selected>Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
              <label for="select2Dark">Dark</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Select2 -->

  <!-- Tagify -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Tagify</h5>
      <div class="card-body">
        <div class="row g-6">
          <!-- Basic -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <input id="TagifyBasic" class="form-control" name="TagifyBasic" value="Tag1, Tag2, Tag3" />
              <label for="TagifyBasic">Basic</label>
            </div>
          </div>
          <!-- Readonly Mode -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <input id="TagifyReadonly" class="form-control readonlyMix" name="TagifyReadonly" readonly
                value='[{"value" : "tag1","readonly" : true, "title" : "Non-editable Read-only tag"},{"value" : "tag2","title" : "Editable read-only tag"},{"value" : "tag3","readonly" : true,"title" : "Another readonly tag"}]' />
              <label for="TagifyReadonly">Readonly</label>
            </div>
          </div>
          <!-- Custom Suggestions: Inline -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <input id="TagifyCustomInlineSuggestion" name="TagifyCustomInlineSuggestion" class="form-control h-auto"
                placeholder="select technologies" value="css, html, javascript" />
              <label for="TagifyCustomInlineSuggestion">Custom Inline Suggestions</label>
            </div>
          </div>
          <!-- Custom Suggestions: List -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <input id="TagifyCustomListSuggestion" name="TagifyCustomListSuggestion" class="form-control h-auto"
                placeholder="select technologies" value="css, html, php" />
              <label for="TagifyCustomListSuggestion">Custom List Suggestions</label>
            </div>
          </div>
          <!-- Users List -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <input id="TagifyUserList" name="TagifyUserList" class="form-control h-auto"
                value="abatisse2@nih.gov, Justinian Hattersley" />
              <label for="TagifyUserList">Users List</label>
            </div>
          </div>
          <!-- Email -->
          <div class="col-md-6">
            <label for="TagifyEmailList" class="form-label d-block">Email List</label>
            <input id="TagifyEmailList" class="tagify-email-list" value="some56.name@website.com" />
            <button type="button" class="btn btn-sm rounded-pill btn-icon btn-outline-primary mb-1"><span
                class="icon-base ri ri-add-line icon-18px"></span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Tagify -->

  <!-- Bootstrap Select -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Typeahead</h5>
      <div class="card-body">
        <div class="row g-6">
          <!-- Basic -->
          <div class="col-md-6">
            <label for="TypeaheadBasic" class="form-label">Basic</label>
            <input id="TypeaheadBasic" class="form-control typeahead" type="text" autocomplete="off"
              placeholder="Enter states from USA" />
          </div>
          <!-- Bloodhound -->
          <div class="col-md-6">
            <label for="TypeaheadBloodHound" class="form-label">BloodHound (Suggestion Engine)</label>
            <input id="TypeaheadBloodHound" class="form-control typeahead-bloodhound" type="text" autocomplete="off"
              placeholder="Enter states from USA" />
          </div>
          <!-- Prefetch -->
          <div class="col-md-6">
            <label for="TypeaheadPrefetch" class="form-label">Prefetch</label>
            <input id="TypeaheadPrefetch" class="form-control typeahead-prefetch" type="text" autocomplete="off"
              placeholder="Enter states from USA" />
          </div>
          <!-- Default Suggestions -->
          <div class="col-md-6">
            <label for="TypeaheadSuggestions" class="form-label">Default Suggestions</label>
            <input id="TypeaheadSuggestions" class="form-control typeahead-default-suggestions" type="text"
              autocomplete="off" />
          </div>
          <!-- Custom Template -->
          <div class="col-md-6 mb-md-0">
            <label for="TypeaheadCustom" class="form-label">Custom Template</label>
            <input id="TypeaheadCustom" class="form-control typeahead-custom-template" type="text" autocomplete="off"
              placeholder="Search For Oscar Winner" />
          </div>
          <!-- Multiple Datasets -->
          <div class="col-md-6">
            <label for="TypeaheadMultipleDataset" class="form-label">Multiple Datasets</label>
            <input id="TypeaheadMultipleDataset" class="form-control typeahead-multi-datasets" type="text"
              autocomplete="off" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Typeahead -->

  <!-- Bootstrap Select -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Bootstrap Select</h5>
      <div class="card-body">
        <div class="row g-6">
          <!-- Basic -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
                <option>Rocky</option>
                <option>Pulp Fiction</option>
                <option>The Godfather</option>
              </select>
              <label for="selectpickerBasic">Basic</label>
            </div>
          </div>
          <!-- Group -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="selectpickerGroups" class="selectpicker w-100" data-style="btn-default">
                <optgroup label="Movies">
                  <option>Rocky</option>
                  <option>Pulp Fiction</option>
                  <option>The Godfather</option>
                </optgroup>
                <optgroup label="Series">
                  <option>Breaking Bad</option>
                  <option>Black Mirror</option>
                  <option>Money Heist</option>
                </optgroup>
              </select>
              <label for="selectpickerGroups">Groups</label>
            </div>
          </div>
          <!-- Multiple -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="selectpickerMultiple" class="selectpicker w-100" data-style="btn-default" multiple
                data-tick-icon="icon-base ri ri-check-line text-white">
                <option>Rocky</option>
                <option>Pulp Fiction</option>
                <option>The Godfather</option>
              </select>
              <label for="selectpickerMultiple">Multiple</label>
            </div>
          </div>
          <!-- Live Search -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="selectpickerLiveSearch" class="selectpicker w-100" data-style="btn-default"
                data-live-search="true">
                <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                <option data-tokens="mustard">Burger, Shake and a Smile</option>
                <option data-tokens="frosting">Sugar, Spice and all things nice</option>
              </select>
              <label for="selectpickerLiveSearch">Live Search</label>
            </div>
          </div>
          <!-- Icons -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select class="selectpicker w-100 show-tick" id="selectpickerIcons"
                data-tick-icon="icon-base ri ri-check-line" data-style="btn-default">
                <option data-icon="icon-base ri ri-instagram-line icon-sm">Instagram</option>
                <option data-icon="icon-base ri ri-pinterest-fill icon-sm">Pinterest</option>
                <option data-icon="icon-base ri ri-twitch-fill icon-sm">Twitch</option>
              </select>
              <label for="selectpickerIcons">Icons</label>
            </div>
          </div>
          <!-- Subtext -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="selectpickerSubtext" class="selectpicker w-100" data-style="btn-default"
                data-show-subtext="true">
                <option data-subtext="Framework">React</option>
                <option data-subtext="Styles">Sass</option>
                <option data-subtext="Markup">HTML</option>
              </select>
              <label for="selectpickerSubtext">Subtext</label>
            </div>
          </div>
          <!-- Selection Limit -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="selectpickerSelection" class="selectpicker w-100" data-style="btn-default" multiple
                data-max-options="2">
                <option>Rocky</option>
                <option>Pulp Fiction</option>
                <option>The Godfather</option>
              </select>
              <label for="selectpickerSelection">Selection Limit</label>
            </div>
          </div>
          <!-- Select / Deselect All -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="selectpickerSelectDeselect" class="selectpicker w-100" data-style="btn-default" multiple
                data-actions-box="true">
                <option>Rocky</option>
                <option>Pulp Fiction</option>
                <option>The Godfather</option>
              </select>
              <label for="selectpickerSelectDeselect">Select / Deselect All</label>
            </div>
          </div>
          <!-- Divider -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="selectpickerDivider" class="selectpicker w-100" data-style="btn-default">
                <option>Rocky</option>
                <option data-divider="true">divider</option>
                <option>Pulp Fiction</option>
                <option>The Godfather</option>
              </select>
              <label for="selectpickerDivider">Divider</label>
            </div>
          </div>
          <!-- Header -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="selectpickerHeader" class="selectpicker w-100" data-style="btn-default"
                data-header="Select a Movie">
                <option>Rocky</option>
                <option>Pulp Fiction</option>
                <option>The Godfather</option>
              </select>
              <label for="selectpickerHeader">Header</label>
            </div>
          </div>
          <!-- Disabled -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="selectpickerDisabled" class="selectpicker w-100" data-style="btn-default" disabled>
                <option>Rocky</option>
                <option>Pulp Fiction</option>
                <option>The Godfather</option>
              </select>
              <label for="selectpickerDisabled">Disabled</label>
            </div>
          </div>
          <!-- Disabled Options -->
          <div class="col-md-6">
            <div class="form-floating form-floating-outline">
              <select id="selectpickerDisabledOptions" class="selectpicker w-100" data-style="btn-default">
                <option>Rocky</option>
                <option disabled>Pulp Fiction</option>
                <option>The Godfather</option>
              </select>
              <label for="selectpickerDisabledOptions">Disabled Options</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Bootstrap Select -->
</div>
@endsection