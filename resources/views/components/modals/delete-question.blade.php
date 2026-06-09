    <div class="modal modal-blur fade" id="removeQuestionModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content position-relative">
                <!-- CLOSE -->
                <button type="button" class="btn-close position-absolute top-0 end-0 mt-3 me-3" data-bs-dismiss="modal"
                    aria-label="Close"></button>

                <!-- BODY -->
                <div class="modal-body text-center pt-6 pb-4 px-4">
                    <!-- ICON -->
                    <span class="avatar avatar-md bg-red-lt mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="icon text-danger m-0">
                            <path d="M12 9v4"></path>

                            <path
                                d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z">
                            </path>

                            <path d="M12 16h.01"></path>
                        </svg>
                    </span>

                    <!-- TITLE -->
                    <h3 class="mb-2">Delete Question?</h3>

                    <!-- DESCRIPTION -->
                    <div class="text-secondary">
                        Are you sure you want to permanently remove this question?
                        This action cannot be undone.
                    </div>
                </div>

                <!-- FOOTER -->
                <div class="modal-footer bg-transparent pt-0 px-4 pb-4">
                    <div class="row g-2 w-100">
                        <div class="col">
                            <button type="button" class="btn w-100" data-bs-dismiss="modal">
                                Cancel
                            </button>
                        </div>

                        <div class="col">
                            <button type="button" class="btn btn-danger w-100">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>