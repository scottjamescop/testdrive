( function() {
    const dialog = document.getElementById("datasheetModal");
    const showButton = document.getElementById("datasheetModalCta");
    const closeButton = document.getElementById("datasheetModalClose");

    showButton.addEventListener("click", () => {
        dialog.showModal();
    });

    closeButton.addEventListener("click", () => {
        dialog.close();
    });
}() );