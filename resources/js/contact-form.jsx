import classNames from "classnames";
import { Form, Formik } from "formik";
import { useEffect, useState } from "react";
import * as Yup from 'yup';



function ContactForm({ text }) {
  const [initialValues, setInitialValues] = useState();
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [succeeded, setSucceeded] = useState(false);

  const validationSchema = Yup.object().shape({
    name: Yup.string().required(text.error.name.required),
    surname: Yup.string().required(text.error.surname.required),
    tel: Yup.string().required(text.error.tel.required),
    email: Yup.string().required(text.error.email.required)
      .email(text.error.email.email),
    me: Yup.string().required(text.error.me.required),
    service: Yup.string().required(text.error.service.required),
  });

  useEffect(() => {
    const handleKeydown = (evt) => {
      if (evt.key === 'Escape') {
        setInitialValues(undefined);
      }
    };

    const handleClick = (evt) => {
      const el = evt.target.closest('[data-contact-form]');

      if (el) {
        evt.preventDefault();

        setInitialValues({
          name: '',
          surname: '',
          tel: '',
          email: '',
          me: el.dataset.me || '',
          service: el.dataset.service || '',
          comment: '',
        });
      }
    }

    document.addEventListener('keydown', handleKeydown);
    document.addEventListener('click', handleClick);

    return () => {
      document.addEventListener('keydown', handleKeydown);
      document.addEventListener('click', handleClick);
    };
  }, []);

  const handleSelectClick = (evt) => {
    if (evt.currentTarget.hasAttribute('style')) {
      evt.currentTarget.removeAttribute('style');
      evt.currentTarget.classList.remove('select--open');
    } else {
      evt.currentTarget.setAttribute('style', `height: ${evt.currentTarget.scrollHeight}px`);
      evt.currentTarget.classList.add('select--open');
    }
  }

  const handleDragStart = (evt) => {
    const startY = evt.type === 'mousedown'
      ? evt.clientY
      : evt.touches[0].clientY;

    const textarea = evt.target.previousElementSibling;
    const startHeight = textarea.clientHeight;

    const onMove = (moveEvent) => {
      const currentY = moveEvent.type === 'mousemove'
        ? moveEvent.clientY
        : moveEvent.touches[0].clientY;

      const deltaY = currentY - startY;

      textarea.style.height = `${startHeight + deltaY}px`;
    };

    const onEnd = () => {
      document.removeEventListener('mousemove', onMove);
      document.removeEventListener('mouseup', onEnd);
      document.removeEventListener('touchmove', onMove);
      document.removeEventListener('touchend', onEnd);
    };

    document.addEventListener('mousemove', onMove);
    document.addEventListener('mouseup', onEnd);
    document.addEventListener('touchmove', onMove, { passive: false });
    document.addEventListener('touchend', onEnd);
  };


  const onSubmit = async (values) => {
    setIsSubmitting(true);

    setTimeout(() => {
      setSucceeded(true);
    }, 2000)

    setTimeout(() => {
      setInitialValues(undefined);
    },3000);
  };

  if (!initialValues) return null;

  return (
    <div className="modal no-scrollbar">
      <Formik
        initialValues={initialValues}
        onSubmit={onSubmit}
        validationSchema={validationSchema}
      >
        {({ values, setFieldValue, errors, touched }) => (
          <Form className="form container">
            <h2 className="form__title">{text.title}</h2>

            <input className={classNames('text-field mb-2', errors.name && touched.name && '!border-red-400')} name="name" type="text" placeholder={text.placeholder.name} aria-label={text.name} value={values.name} onChange={(evt) => setFieldValue('name', evt.target.value)} />
            {errors.name && touched.name && (
              <span className="relative -top-2 pl-4 text-red-400 text-sm">{errors.name}</span>
            )}
            <input className={classNames('text-field mb-2', errors.surname && touched.surname && '!border-red-400')} name="surname" type="text" placeholder={text.placeholder.surname} aria-label={text.surname} value={values.surname} onChange={(evt) => setFieldValue('surname', evt.target.value)} />
            {errors.surname && touched.surname && (
              <span className="relative -top-2 pl-4 text-red-400 text-sm">{errors.surname}</span>
            )}
            <input className={classNames('text-field mb-2', errors.tel && touched.tel && '!border-red-400')} name="tel" type="tel" placeholder={text.placeholder.tel} aria-label={text.tel} value={values.tel} onChange={(evt) => setFieldValue('tel', evt.target.value)} />
            {errors.tel && touched.tel && (
              <span className="relative -top-2 pl-4 text-red-400 text-sm">{errors.tel}</span>
            )}
            <input className={classNames('text-field mb-2', errors.email && touched.email && '!border-red-400')} name="email" type="email" placeholder={text.placeholder.email} aria-label={text.email} value={values.email} onChange={(evt) => setFieldValue('email', evt.target.value)} />
            {errors.email && touched.email && (
              <span className="relative -top-2 pl-4 text-red-400 text-sm">{errors.email}</span>
            )}

            <div className={classNames('text-field select mb-2', errors.me && touched.me && '!border-red-400')} onClick={handleSelectClick}>
              <button className={classNames('select__field', values.me && '!text-khaki !font-normal')} type="button">
                {values.me || text.placeholder.me}
              </button>

              {text.options.me.filter((option) => option !== values.me).map((option) => (
                <button
                  key={option}
                  className="select__option"
                  type="button"
                  onClick={() => {
                    setFieldValue('me', option);
                    setFieldValue('service', '');
                  }}
                >
                  {option}
                </button>
              ))}
            </div>
            {errors.me && touched.me && (
              <span className="relative -top-2 pl-4 text-red-400 text-sm">{errors.me}</span>
            )}

            <div className={classNames('text-field select mb-2', errors.service && touched.service && '!border-red-400')} onClick={handleSelectClick}>
              <button className={classNames('select__field', values.service && '!text-khaki !font-normal')} type="button">
                {values.service || text.placeholder.service}
              </button>

              {values.me !== text.options.me[1] && values.me !== text.options.me[2] && text.options.renters.map((option) => (
                <button
                  key={option}
                  className="select__option"
                  type="button"
                  onClick={() => {
                    setFieldValue('me', text.options.me[0]);
                    setFieldValue('service', option);
                  }}
                >
                  {option}
                </button>
              ))}
              {values.me !== text.options.me[0] && values.me !== text.options.me[2] && text.options.owners.map((option) => (
                <button
                  key={option}
                  className="select__option"
                  type="button"
                  onClick={() => {
                    setFieldValue('me', text.options.me[1]);
                    setFieldValue('service', option);
                  }}
                >
                  {option}
                </button>
              ))}
              {values.me !== text.options.me[0] && values.me !== text.options.me[1] && text.options.brokers.map((option) => (
                <button
                  key={option}
                  className="select__option"
                  type="button"
                  onClick={() => {
                    setFieldValue('me', text.options.me[2]);
                    setFieldValue('service', option);
                  }}
                >
                  {option}
                </button>
              ))}
            </div>
            {errors.service && touched.service && (
              <span className="relative -top-2 pl-4 text-red-400 text-sm">{errors.service}</span>
            )}

            <div className="textarea-wrapper">
              <textarea
                className="text-field text-field--textarea py-3 mb-6 resize-none md:py-[15px]"
                name="comment"
                placeholder={text.placeholder.comment}
                aria-label={text.placeholder.comment}
                value={values.comment}
                onInput={(evt) => {
                  evt.target.style.height = `${evt.target.scrollHeight + 2}px`;
                  setFieldValue('comment', evt.target.value);
                }}
              />
              <button
                className="textarea-wrapper__button"
                type="button"
                onMouseDown={handleDragStart}
                onTouchStart={handleDragStart}
              ></button>
            </div>

            <button className="form__submit" type="submit" disabled={isSubmitting}>
              {!succeeded ? (isSubmitting ? (
                <span className="inline-block animate-rotation rounded-[50%] border-t-[2px] border-t-platinum border-r-[2px] border-r-transparent w-8 h-8"></span>
              ) : text.submit) : (
                <svg xmlns="http://www.w3.org/2000/svg" width={30} height={30} viewBox="0 0 36 36">
                  <path fill="#d9d9d9" d="M18 2a16 16 0 1 0 16 16A16 16 0 0 0 18 2Zm0 30a14 14 0 1 1 14-14 14 14 0 0 1-14 14Z" className="clr-i-outline clr-i-outline-path-1" />
                  <path fill="#d9d9d9" d="M28 12.1a1 1 0 0 0-1.41 0l-11.1 11.05-6-6A1 1 0 0 0 8 18.53L15.49 26 28 13.52a1 1 0 0 0 0-1.42Z" className="clr-i-outline clr-i-outline-path-2" />
                  <path fill="none" d="M0 0h36v36H0z" />
                </svg>
              )}
            </button>

            <p className="text-xs leading-none m-0 font-light" dangerouslySetInnerHTML={{ __html: text.warning }}></p>

            <button className="modal__close" type="button" onClick={() => setInitialValues(undefined)}>
              <span className="sr-only">{text.close}</span>
              <svg width={26} height={24}>
                <use href="#close" />
              </svg>
            </button>
          </Form>
        )}
      </Formik>
    </div>
  )
}

export default ContactForm;
