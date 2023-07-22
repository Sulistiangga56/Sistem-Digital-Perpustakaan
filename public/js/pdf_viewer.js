// public/pdf_viewer.js
document.addEventListener("DOMContentLoaded", function () {
    const pdfPath = "{{ asset('/files/'.$buku->files) }}";
    const pdfViewer = document.getElementById("pdf-viewer");

    // Check if PDF.js is loaded
    if (typeof pdfjsLib !== "undefined") {
      const loadingTask = pdfjsLib.getDocument(pdfPath);
      loadingTask.promise.then(function (pdf) {
        // Fetch the first page
        pdf.getPage(1).then(function (page) {
          const scale = 1.5;
          const viewport = page.getViewport({ scale });

          // Prepare canvas using PDF.js
          const canvas = document.createElement("canvas");
          const context = canvas.getContext("2d");
          canvas.height = viewport.height;
          canvas.width = viewport.width;
          pdfViewer.appendChild(canvas);

          // Render the page content on the canvas
          const renderContext = {
            canvasContext: context,
            viewport: viewport,
          };
          page.render(renderContext);
        });
      });
    }
  });
