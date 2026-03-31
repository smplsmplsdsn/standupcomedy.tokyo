const setBg = (gallery) => {
  const _bg_img = $('.js-bg-img')

  let length = gallery.length,
      i,
      is_set

  for (i = 0; i < length; i++) {
    const img = new Image(),
          file = gallery[i]

    img.onload = () => {
      _bg_img.prepend(`
        <div class="bg-inner" data-file="${file}" style="background-image:url(${file})"></div>
      `)
      is_set = true
    }

    img.src = file
  }


  const animateBg = () => {
    const tgt = $('.js-bg-img .bg-inner:last-child')

    if (is_set) {
      tgt.animate({
        opacity: 0
      }, 3000, () => {
        _bg_img.prepend(tgt)
        tgt.css({
          opacity: 1
        })
        setTimeout(animateBg, 3000)
      })
    } else {
      setTimeout(animateBg, 1000)
    }
  }

  animateBg()
}