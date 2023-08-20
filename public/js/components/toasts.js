/**
 *
 * ComponentsToasts
 *
 * Interface.Components.Toasts page content scripts. Initialized from scripts.js file.
 *
 *
 */

class ComponentsToasts {
    constructor() {
        // References to page items that might require an update
        this._toast = null;
        this._liveToast = null;
        this._selectToastPlacement = null;

        // Initialization of the page plugins
        this._initToast();
        this._initLiveToast();
        this._initToastPlacement();
    }

    // My default toast
    _initToast() {
        const toastEl = document.getElementById("toast");
        if (toastEl) {
            this._toast = new bootstrap.Toast(toastEl);
            this._toast && this._toast.show();
        }
    }

    _initLiveToast() {
        const liveToastEl = document.getElementById("liveToast");
        const liveToastBtnEl = document.getElementById("liveToastBtn");

        if (liveToastEl && liveToastBtnEl) {
            this._liveToast = new bootstrap.Toast(
                document.getElementById("liveToast")
            );

            liveToastBtnEl.addEventListener("click", (event) => {
                this._liveToast && this._liveToast.show();
            });
        }
    }
    _initToastPlacement() {
        const selectToastPlacementEl = document.getElementById(
            "selectToastPlacement"
        );
        const toastPlacementEl = document.getElementById("toastPlacement");

        if (selectToastPlacementEl && toastPlacementEl) {
            selectToastPlacementEl.addEventListener("change", (event) => {
                toastPlacementEl.className = `toast-container position-absolute p-3 ${selectToastPlacementEl.value}`;
            });
        }
    }
}
