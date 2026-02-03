class DynamicAdapt {
  constructor(e) {
    this.type = e;
  }
  init() {
    ((this.оbjects = []),
      (this.daClassname = '_dynamic_adapt_'),
      (this.nodes = [...document.querySelectorAll('[data-da]')]),
      this.nodes.forEach((e) => {
        var t = e.dataset.da.trim().split(','),
          s = {};
        ((s.element = e),
          (s.parent = e.parentNode),
          (s.destination = document.querySelector('' + t[0].trim())),
          (s.breakpoint = t[1] ? t[1].trim() : '767'),
          (s.place = t[2] ? t[2].trim() : 'last'),
          (s.index = this.indexInParent(s.parent, s.element)),
          this.оbjects.push(s));
      }),
      this.arraySort(this.оbjects),
      (this.mediaQueries = this.оbjects
        .map(({ breakpoint: e }) => `(${this.type}-width: ${e}px),` + e)
        .filter((e, t, s) => s.indexOf(e) === t)),
      this.mediaQueries.forEach((e) => {
        e = e.split(',');
        let t = window.matchMedia(e[0]),
          s = e[1],
          n = this.оbjects.filter(({ breakpoint: e }) => e === s);
        (t.addEventListener('change', () => {
          this.mediaHandler(t, n);
        }),
          this.mediaHandler(t, n));
      }));
  }
  mediaHandler(e, t) {
    e.matches
      ? t.forEach((e) => {
          this.moveTo(e.place, e.element, e.destination);
        })
      : t.forEach(({ parent: e, element: t, index: s }) => {
          t.classList.contains(this.daClassname) && this.moveBack(e, t, s);
        });
  }
  moveTo(e, t, s) {
    (t.classList.add(this.daClassname),
      'last' === e || e >= s.children.length
        ? s.append(t)
        : 'first' === e
          ? s.prepend(t)
          : s.children[e].before(t));
  }
  moveBack(e, t, s) {
    (t.classList.remove(this.daClassname),
      void 0 !== e.children[s] ? e.children[s].before(t) : e.append(t));
  }
  indexInParent(e, t) {
    return [...e.children].indexOf(t);
  }
  arraySort(e) {
    'min' === this.type
      ? e.sort((e, t) =>
          e.breakpoint === t.breakpoint
            ? e.place === t.place
              ? 0
              : 'first' === e.place || 'last' === t.place
                ? -1
                : 'last' === e.place || 'first' === t.place
                  ? 1
                  : 0
            : e.breakpoint - t.breakpoint,
        )
      : e.sort((e, t) =>
          e.breakpoint === t.breakpoint
            ? e.place === t.place
              ? 0
              : 'first' === e.place || 'last' === t.place
                ? 1
                : 'last' === e.place || 'first' === t.place
                  ? -1
                  : 0
            : t.breakpoint - e.breakpoint,
        );
  }
}
let da = new DynamicAdapt('max'),
  bodyLockStatus = (da.init(), !0),
  bodyLockToggle = (e = 500) => {
    (document.documentElement.classList.contains('lock')
      ? bodyUnlock
      : bodyLock)(e);
  },
  bodyUnlock = (e = 500) => {
    let s = document.querySelector('body');
    if (bodyLockStatus) {
      let t = document.querySelectorAll('[data-lp]');
      (setTimeout(() => {
        for (let e = 0; e < t.length; e++) t[e].style.paddingRight = '0px';
        ((s.style.paddingRight = '0px'),
          document.documentElement.classList.remove('lock'));
      }, e),
        (bodyLockStatus = !1),
        setTimeout(function () {
          bodyLockStatus = !0;
        }, e));
    }
  },
  bodyLock = (e = 500) => {
    var t = document.querySelector('body');
    if (bodyLockStatus) {
      var s = document.querySelectorAll('[data-lp]');
      for (let e = 0; e < s.length; e++)
        s[e].style.paddingRight =
          window.innerWidth -
          document.querySelector('.wrapper').offsetWidth +
          'px';
      ((t.style.paddingRight =
        window.innerWidth -
        document.querySelector('.wrapper').offsetWidth +
        'px'),
        document.documentElement.classList.add('lock'),
        (bodyLockStatus = !1),
        setTimeout(function () {
          bodyLockStatus = !0;
        }, e));
    }
  };
function menuInit() {
  document.querySelector('.icon-menu') &&
    document.addEventListener('click', function (e) {
      bodyLockStatus &&
        e.target.closest('.icon-menu') &&
        (bodyLockToggle(),
        document.documentElement.classList.toggle('menu-open'));
    });
}
function menuOpen() {
  (bodyLock(), document.documentElement.classList.add('menu-open'));
}
function menuClose() {
  (bodyUnlock(), document.documentElement.classList.remove('menu-open'));
}
function headerScroll() {
  addWindowScrollEvent = !0;
  let s = document.querySelector('header.header'),
    n = s.hasAttribute('data-scroll-show'),
    o = s.dataset.scrollShow || 500,
    i = s.dataset.scroll || 1,
    a = 0,
    l;
  document.addEventListener('scroll', function (e) {
    var t = window.scrollY;
    (clearTimeout(l),
      t >= i
        ? (s.classList.contains('_header-scroll') ||
            s.classList.add('_header-scroll'),
          n &&
            (t > a
              ? s.classList.contains('_header-show') &&
                s.classList.remove('_header-show')
              : s.classList.contains('_header-show') ||
                s.classList.add('_header-show'),
            (l = setTimeout(() => {
              s.classList.contains('_header-show') ||
                s.classList.add('_header-show');
            }, o))))
        : (s.classList.contains('_header-scroll') &&
            s.classList.remove('_header-scroll'),
          n &&
            s.classList.contains('_header-show') &&
            s.classList.remove('_header-show')),
      (a = t <= 0 ? 0 : t));
  });
}
function initSliders() {
  document.querySelector('.projects__slider') &&
    new Swiper('.projects__slider', {
      observer: !0,
      observeParents: !0,
      slidesPerView: 4,
      spaceBetween: 20,
      speed: 800,
      navigation: {
        prevEl: '.navigation-projects__prev-btn',
        nextEl: '.navigation-projects__next-btn',
      },
      breakpoints: {
        320: { slidesPerView: 1, spaceBetween: 10 },
        768: { slidesPerView: 2, spaceBetween: 20 },
        992: { slidesPerView: 3, spaceBetween: 20 },
        1268: { slidesPerView: 4, spaceBetween: 30 },
      },
      on: {},
    });
}
(menuInit(),
  headerScroll(),
  window.addEventListener('load', function (e) {
    initSliders();
  }),
  (() => {
    var e = new Swiper('.project-item__thumbs', {
      watchSlidesProgress: !0,
      spaceBetween: 20,
      breakpoints: {
        0: { slidesPerView: 3, spaceBetween: 10 },
        768: { slidesPerView: 5 },
      },
    });
    new Swiper('.project-item__slider', {
      speed: 450,
      slidesPerView: 1,
      spaceBetween: 0,
      keyboard: { enabled: !0 },
      navigation: {
        prevEl: '.project-item__slider-navigation_prev',
        nextEl: '.project-item__slider-navigation_next',
      },
      thumbs: { swiper: e },
    });
  })(),
  document.addEventListener('DOMContentLoaded', () => {
    let s = document.querySelectorAll('.portfolio__item'),
      e = document.querySelector('.showmore');
    if (s.length && e) {
      let t = 0;
      function n() {
        for (let e = t; e < t + 9; e++)
          s[e] && s[e].classList.add('is-visible');
        (t += 9) >= s.length && (e.style.display = 'none');
      }
      (n(), e.addEventListener('click', n));
    }
  }),
  document.addEventListener('DOMContentLoaded', () => {
    let e = Array.from(document.querySelectorAll('.portfolio__item')),
      s = document.querySelector('.showmore'),
      n = document.querySelectorAll('.portfolio__actions button'),
      o = 8,
      i = 'home',
      a = 0,
      l = [];
    function r(t) {
      ((i = t),
        (a = 0),
        n.forEach((e) => e.classList.toggle('active', e.dataset.filter === t)),
        (l = e.filter((e) => e.dataset.category?.split(' ').includes(t))),
        e.forEach((e) => e.classList.remove('is-visible')),
        c(),
        (s.style.display = l.length > o ? 'inline-block' : 'none'));
    }
    function c() {
      for (let e = a; e < a + o; e++) l[e] && l[e].classList.add('is-visible');
      (a += o) >= l.length && (s.style.display = 'none');
    }
    (r(i),
      s.addEventListener('click', c),
      n.forEach((t) => {
        t.addEventListener('click', () => {
          var e = t.dataset.filter;
          e !== i && r(e);
        });
      }));
  }));

document.addEventListener('DOMContentLoaded', () => {
  // ======================
  // OPEN MODAL
  // ======================
  document.addEventListener('click', (e) => {
    const trigger = e.target.closest('[data-open-form]');
    if (!trigger) return;

    e.preventDefault();
    if (window.MicroModal) MicroModal.show('form-modal');
  });

  // ======================
  // TOAST LOGIC
  // ======================
  const toast = document.getElementById('toast');
  const toastText = document.getElementById('toastText');
  const toastClose = document.getElementById('toastClose');
  let toastTimer = null;

  const hideToast = () => {
    if (!toast) return;

    toast.classList.remove('is-show');
    toast.classList.add('is-hide');

    setTimeout(() => {
      toast.hidden = true;
      toast.classList.remove('is-hide');
    }, 180);
  };

  const showToast = (text, timeout = 3000) => {
    if (!toast || !toastText) return;

    toastText.textContent = text;

    toast.hidden = false;
    toast.classList.remove('is-hide');
    toast.classList.add('is-show');

    if (toastTimer) clearTimeout(toastTimer);
    toastTimer = setTimeout(hideToast, timeout);
  };

  if (toastClose) toastClose.addEventListener('click', hideToast);

  // ======================
  // CONFIG (TELEGRAM)
  // ⚠️ вставь сюда свои значения локально
  // ======================
  const BOT_TOKEN = '8454367089:AAH961WMxuACIwI5pFBL1jYWBZKrMF0wbIU';
  const CHAT_ID = '-1003711872435';

  // ======================
  // EMAIL VALIDATION
  // ======================
  const isValidEmail = (email) => /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/i.test(email);

  // ======================
  // SEND TO TELEGRAM
  // ======================
  async function sendToTelegram({ name, phone, email, message }) {
    const text =
      `📝 Новая заявка с сайта\n` +
      `👤 Имя: ${name}\n` +
      `📞 Телефон: ${phone}\n` +
      `📧 Email: ${email}\n` +
      `💬 Сообщение: ${message || '—'}`;

    const res = await fetch(
      `https://api.telegram.org/bot${BOT_TOKEN}/sendMessage`,
      {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          chat_id: CHAT_ID,
          text,
          disable_web_page_preview: true,
        }),
      },
    );

    const data = await res.json().catch(() => null);

    if (!res.ok || !data?.ok) {
      throw new Error(data?.description || 'Telegram API error');
    }
  }

  // ======================
  // INIT ALL FORMS
  // (и модалка, и форма на странице)
  // ======================
  const forms = document.querySelectorAll('.callback-block__form');
  if (!forms.length) return;

  forms.forEach((form) => {
    const submitBtn = form.querySelector('button[type="submit"]');

    // ---- phone mask per form
    const phoneInput = form.querySelector('[name="phone"]');
    if (phoneInput && window.Inputmask) {
      Inputmask({
        mask: '+7 (999) 999-99-99',
        showMaskOnHover: false,
        showMaskOnFocus: true,
        clearIncomplete: true,
      }).mask(phoneInput);
    }

    // ---- errors helpers
    const clearErrors = () => {
      form.querySelectorAll('.callback-block__error').forEach((el) => {
        el.textContent = '';
        el.style.display = 'none';
      });

      form.querySelectorAll('.is-error').forEach((el) => {
        el.classList.remove('is-error');
      });
    };

    const setError = (inputName, text) => {
      const field = form.querySelector(`[name="${inputName}"]`);
      if (!field) return;

      field.classList.add('is-error');

      const line = field.closest('.callback-block__line');
      const err = line?.querySelector('.callback-block__error');
      if (err) {
        err.textContent = text;
        err.style.display = 'block';
      }
    };

    // remove error on input
    form.querySelectorAll('input, textarea').forEach((field) => {
      field.addEventListener('input', () => {
        field.classList.remove('is-error');
        const line = field.closest('.callback-block__line');
        const err = line?.querySelector('.callback-block__error');
        if (err) {
          err.textContent = '';
          err.style.display = 'none';
        }
      });
    });

    // optional: validate email on blur
    const emailInput = form.querySelector('[name="email"]');
    if (emailInput) {
      emailInput.addEventListener('blur', () => {
        const value = emailInput.value.trim();
        if (value && !isValidEmail(value)) {
          setError('email', 'Введите корректный email');
        }
      });
    }

    // ---- submit
    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      clearErrors();

      const name = form.querySelector('[name="name"]')?.value.trim() || '';
      const phone = form.querySelector('[name="phone"]')?.value.trim() || '';
      const email = form.querySelector('[name="email"]')?.value.trim() || '';
      const message =
        form.querySelector('[name="message"]')?.value.trim() || '';
      const consent = form.querySelector('[name="consent"]')?.checked || false;

      let hasError = false;

      // if (!name) {
      //   setError('name', 'Введите имя');
      //   hasError = true;
      // }

      if (phone.replace(/\D/g, '').length !== 11) {
        setError('phone', 'Введите корректный номер телефона');
        hasError = true;
      }

      if (email && !isValidEmail(email)) {
        setError('email', 'Введите корректный email');
        hasError = true;
      }

      if (!consent) {
        showToast('Нужно согласие на обработку данных', 3500);
        hasError = true;
      }

      if (hasError) return;

      try {
        if (submitBtn) submitBtn.disabled = true;

        await sendToTelegram({ name, phone, email, message });

        form.reset();

        // ✅ close modal only if this form is inside the modal
        if (window.MicroModal && form.closest('.modal')) {
          MicroModal.close('form-modal');
        }

        showToast('Заявка отправлена ✅', 3500);
      } catch (err) {
        showToast('Ошибка отправки. Попробуйте позже.', 4000);
      } finally {
        if (submitBtn) submitBtn.disabled = false;
      }
    });
  });
});
