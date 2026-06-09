<div class="modal modal-blur fade" id="addShortTextQuestionModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-full-width modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content position-relative">
      <!-- CLOSE -->
      <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal"
        aria-label="Close"></button>

      <!-- BODY -->
      <div class="modal-body p-6">

        <div class="row d-flex justify-content-center mb-6">
          <span class="avatar avatar-md avatar-shadow-0 bg-blue-lt">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="icon icon-tabler icons-tabler-outline icon-tabler-text-caption">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M4 15h16"></path>
              <path d="M4 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -4">
              </path>
              <path d="M4 20h12"></path>
            </svg>
          </span>
        </div>

        <div class="row g-lg-10">
          <div class="col-lg-6">
            <div class="space-y-6">
              <div class="">
                <label class="form-label h2 required">Question?</label>
                <input type="text" class="form-control form-control-lg form-control-flush" name="Form control flush"
                  placeholder="Enter your question here"
                  value="What challenges did you face while onboarding your team onto our platform, and what improvements would make the experience more intuitive for first-time users? " />
                <small class="form-hint">Character limit: 255</small>
              </div>
              <div class="">
                <label class="form-label h2">Description (Optional)</label>
                <textarea class="form-control form-control-lg form-control-flush" name="example-textarea-input"
                  data-bs-toggle="autosize" rows="3"
                  placeholder="Provide a description...">Oh! Come and see the violence inherent in the system! Help, help, I'm being repressed! We shall say 'Ni' again to you, if you do not appease us. I'm not a witch. I'm not a witch. Camelot!</textarea>
                <small class="form-hint">Character limit: 255</small>
              </div>
              <div>
                <a class="btn mb-5" data-bs-toggle="collapse" href="#more1">
                  <i class="icon las la-arrow-right"></i>
                  Show Options
                </a>

                <div class="collapse" id="more1">
                  <div class="row row-cards">
                    <div class="col-12">
                      <div class="">
                        <!-- Required -->
                        <div class="mb-3 row">
                          <label class="col-3 col-form-label">Required</label>
                          <div class="col">
                            <label class="form-check form-switch mt-2">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-label">User must answer this field.</span>
                            </label>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label class="col-3 col-form-label">Time Limit</label>
                          <div class="col">
                            <input type="number" class="form-control" aria-describedby="emailHelp"
                              placeholder="Enter time limit for the answer in minutes">
                            <small class="form-hint">Default time limit for the answer will be 2
                              minutes.</small>
                          </div>
                        </div>
                        <!-- Score -->
                        <div class="mb-3 row">
                          <label class="col-3 col-form-label">Score</label>
                          <div class="col">
                            <input type="number" min="0" step="1" class="form-control" placeholder="Enter score value">
                            <small class="form-hint">Use for assessments and quizzes.</small>
                          </div>
                        </div>

                        <!-- Weight -->
                        <div class="mb-3 row">
                          <label class="col-3 col-form-label">Weight</label>
                          <div class="col">
                            <input type="number" min="0.1" step="0.1" class="form-control"
                              placeholder="Enter question weight">
                            <small class="form-hint">Used to calculate overall scores.</small>
                          </div>
                        </div>

                        <!-- AI Evaluation -->
                        <div class="mb-3 row">
                          <label class="col-3 col-form-label">AI Evaluation</label>
                          <div class="col">
                            <label class="form-check form-switch mt-2">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-label">Evaluate using AI</span>
                            </label>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-3 col-form-label">Difficulty Level</label>
                          <div class="col d-flex flex-row gap-4">
                            <label class="form-check">
                              <input class="form-check-input" type="radio" name="difficulty">
                              <span class="form-check-label">Advanced</span>
                            </label>
                            <label class="form-check">
                              <input class="form-check-input" type="radio" name="difficulty">
                              <span class="form-check-label">Medium</span>
                            </label>
                            <label class="form-check">
                              <input class="form-check-input" type="radio" name="difficulty">
                              <span class="form-check-label">Normal</span>
                            </label>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label class="col-3 col-form-label">Word Limit</label>
                          <div class="col">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="minimum"
                                aria-label="Word Limit (min)">
                              <span class="input-group-text">To</span>
                              <input type="text" class="form-control" placeholder="maximum"
                                aria-label="Word Limit (max)">
                            </div>
                            <small class="form-hint">Set the minimum and maximum word limits for the
                              input
                              field.</small>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label class="col-3 col-form-label">Character Limit</label>
                          <div class="col">
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="minimum"
                                aria-label="Character Limit (min)">
                              <span class="input-group-text">To</span>
                              <input type="text" class="form-control" placeholder="maximum"
                                aria-label="Character Limit (max)">
                            </div>
                            <small class="form-hint">Set the minimum and maximum character limits
                              for the
                              input field.</small>
                          </div>
                        </div>
                        <div class="mb-3 row">
                          <label class="col-3 col-form-label required">Placeholder Text</label>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Enter placeholder text">
                            <small class="form-hint">
                              This text will be displayed as a hint inside the input field.
                            </small>
                            </small>
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <label class="col-3 col-form-label required">Help Text</label>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Enter help  text">
                            <small class="form-hint">
                              This text will be displayed below the input field to assist users in
                              providing
                              the correct answer.
                            </small>
                          </div>
                        </div>

                        <div class="mb-3 row">
                          <label class="col-3 col-form-label required">Auto Complete</label>
                          <div class="col">
                            <input type="text" class="form-control"
                              placeholder="Enter auto-complete list items separated by commas">
                            <small class="form-hint">
                              Enter a list of comma-separated values for the auto-complete feature.
                            </small>
                            </small>
                          </div>
                        </div>

                        <!-- Custom Error Message -->
                        <div class="mb-3 row">
                          <label class="col-3 col-form-label">Error Message</label>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Enter custom validation message">
                          </div>
                        </div>

                        <!-- Regular Expression -->
                        <div class="mb-3 row">
                          <label class="col-3 col-form-label">Regex Pattern</label>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="e.g. ^[A-Za-z]+$">
                            <small class="form-hint">Advanced validation rule.</small>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-3 col-form-label">Layout</label>

                          <div class="col d-flex gap-4">

                            <!-- Horizontal -->
                            <label class="form-check form-check-inline text-center">
                              <input class="form-check-input" type="radio" name="layout">
                              <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="currentColor"
                                  class="me-2 icon icon-tabler icons-tabler-filled icon-tabler-layout-sidebar">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <path
                                    d="M6 21a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3zm12 -16h-8v14h8a1 1 0 0 0 1 -1v-12a1 1 0 0 0 -1 -1" />
                                </svg>
                                <div class="font-weight-normal">Horizontal</div>
                              </div>
                            </label>

                            <!-- Vertical -->
                            <label class="form-check form-check-inline text-center">
                              <input class="form-check-input" type="radio" name="layout">
                              <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="currentColor"
                                  class="me-2 icon icon-tabler icons-tabler-filled icon-tabler-section">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                  <path
                                    d="M20.01 19a1 1 0 0 1 .117 1.993l-.127 .007a1 1 0 0 1 -.117 -1.993zm-16 0a1 1 0 0 1 0 2a1 1 0 0 1 -.127 -1.993m4 0a1 1 0 0 1 0 2a1 1 0 0 1 -.127 -1.993m4 0a1 1 0 0 1 .117 1.993l-.127 .007a1 1 0 0 1 -.117 -1.993zm4 0a1 1 0 0 1 .117 1.993l-.127 .007a1 1 0 0 1 -.117 -1.993zm4 -16a1 1 0 0 1 .117 1.993l-.127 .007a1 1 0 0 1 -.117 -1.993zm-16 0a1 1 0 1 1 0 2a1 1 0 0 1 -.127 -1.993m4 0a1 1 0 1 1 0 2a1 1 0 0 1 -.127 -1.993m4 0a1 1 0 0 1 .117 1.993l-.127 .007a1 1 0 0 1 -.117 -1.993zm3.99 0a1 1 0 0 1 1 1a1 1 0 1 1 -2 .01c0 -.562 .448 -1.01 1 -1.01m3 4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2z" />
                                </svg>
                                <div class="font-weight-normal">Vertical</div>
                              </div>
                            </label>

                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 justify-content-center d-flex align-items-center">
            <img src="{{ asset('assets/static/question-paper-icon-4479079-512.png') }}" width="300" height="300"
              alt="Illustration" class="img-fluid">
          </div>

        </div>

      </div>

      <!-- FOOTER -->
      <div class="modal-footer d-flex justify-content-center">
        <div class="row mb-2 g-2 w-50">
          <div class="col">
            <a class="btn w-100" data-bs-dismiss="modal">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-circle-x">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path d="M10 10l4 4m0 -4l-4 4" />
              </svg>
              Close</a>
          </div>

          <div class="col">
            <a class="btn btn-primary w-100">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-1">
                <path d="M5 12l5 5l10 -10"></path>
              </svg>
              Confirm Changes</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>