<div class="modal modal-blur fade" id="addQualifierQuestionModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-full-width modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content position-relative">
      <!-- CLOSE -->
      <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal"
        aria-label="Close"></button>

      <!-- BODY -->
      <div class="modal-body p-6">

        <div class="row d-flex justify-content-center mb-6">
          <span class="avatar avatar-md avatar-shadow-0 bg-primary-lt">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
              class="icon icon-tabler icons-tabler-filled icon-tabler-rosette-discount-check">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M12.01 2.011a3.2 3.2 0 0 1 2.113 .797l.154 .145l.698 .698a1.2 1.2 0 0 0 .71 .341l.135 .008h1a3.2 3.2 0 0 1 3.195 3.018l.005 .182v1c0 .27 .092 .533 .258 .743l.09 .1l.697 .698a3.2 3.2 0 0 1 .147 4.382l-.145 .154l-.698 .698a1.2 1.2 0 0 0 -.341 .71l-.008 .135v1a3.2 3.2 0 0 1 -3.018 3.195l-.182 .005h-1a1.2 1.2 0 0 0 -.743 .258l-.1 .09l-.698 .697a3.2 3.2 0 0 1 -4.382 .147l-.154 -.145l-.698 -.698a1.2 1.2 0 0 0 -.71 -.341l-.135 -.008h-1a3.2 3.2 0 0 1 -3.195 -3.018l-.005 -.182v-1a1.2 1.2 0 0 0 -.258 -.743l-.09 -.1l-.697 -.698a3.2 3.2 0 0 1 -.147 -4.382l.145 -.154l.698 -.698a1.2 1.2 0 0 0 .341 -.71l.008 -.135v-1l.005 -.182a3.2 3.2 0 0 1 3.013 -3.013l.182 -.005h1a1.2 1.2 0 0 0 .743 -.258l.1 -.09l.698 -.697a3.2 3.2 0 0 1 2.269 -.944zm3.697 7.282a1 1 0 0 0 -1.414 0l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.32 1.497l2 2l.094 .083a1 1 0 0 0 1.32 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" />
            </svg>
          </span>
        </div>

        <div class="row g-lg-10">
          <div class="col-lg-6">
            <div class="space-y-6">
              <div class="">
                <label class="form-label h2 required">Question?</label>
                <input type="text" class="form-control form-control-lg form-control-flush" name="Form control flush"
                  placeholder="Enter your qualification question here"
                  value="Are you willing to relocate for this job location? " />
                <small class="form-hint">Character limit: 255</small>
              </div>
              <div class="">
                <label class="form-label h2">Description (Optional)</label>
                <textarea class="form-control form-control-lg form-control-flush" name="example-textarea-input"
                  data-bs-toggle="autosize" rows="3"
                  placeholder="Provide a description...">Qualifier questions are used to verify eligibility for a position.</textarea>
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

          <div class="col-lg-6 ">
            <div class="">
              <livewire:forms.partials.qualifier-question-options />
            </div>
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