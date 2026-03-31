const showGallery = (gallery) => {
  let html = '',
      i

  gallery_order_name = [...gallery].sort()

  for (i = 0; i < gallery_order_name.length; i++) {
    html += `
      <li>
        <img src="${gallery_order_name[i]}" loading="lazy">
        <a href="${gallery_order_name[i]}" download>ダウンロード</a>
      </li>
    `
  }

  $('.js-gallery').html(html)
}