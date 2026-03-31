$(() => {
  fetch('/assets/api/gallery.php')
  .then(res => res.json())
  .then(gallery => {
    showGallery(gallery)
    setBg(Fn.shuffle(gallery, true))
  })
})
