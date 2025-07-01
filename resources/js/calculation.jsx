import * as Yup from 'yup';
import classNames from "classnames";
import { Form, Formik } from "formik";
import { useEffect, useState } from "react";
import { findOptimalCabinets } from './utils';

const K = [15, 15, 40, 40, 60, 60];

function Calculation() {
  const [initialValues, setInitialValues] = useState();
  const [text, setText] = useState(false);
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [succeeded, setSucceeded] = useState(false);
  const [isApplying, setIsApplying] = useState(false);
  const [optimalCabinets, setOptimalCabinets] = useState();

  const validationSchema = Yup.object().shape({
    name: Yup.string().required(text['field.name.required']),
    surname: Yup.string().required(text['field.surname.required']),
    tel: Yup.string().required(text['field.tel.required']),
    email: Yup.string().required(text['field.email.required']).email(text['field.email.email']),
  });

  useEffect(() => {
    const handleKeydown = (evt) => {
      if (evt.key === 'Escape') {
        setInitialValues(undefined);
      }
    };

    const handleClick = (evt) => {
      const el = evt.target.closest('[data-calculation]');

      if (el) {
        evt.preventDefault();

        setText(JSON.parse(el.dataset.calculation));

        setInitialValues({
          employees: 1,
          areaPerEmployee: 7.5,
          room: 1,
          name: '',
          surname: '',
          tel: '',
          email: '',
        });

        setOptimalCabinets(findOptimalCabinets(1, 7.5, 1, K));
      }
    }

    document.addEventListener('keydown', handleKeydown);
    document.addEventListener('click', handleClick);

    return () => {
      document.addEventListener('keydown', handleKeydown);
      document.addEventListener('click', handleClick);
    };
  }, []);

  if (!initialValues) return null;

  const handleSelectClick = (evt) => {
    if (evt.currentTarget.hasAttribute('style')) {
      evt.currentTarget.removeAttribute('style');
      evt.currentTarget.classList.remove('select--open');
    } else {
      evt.currentTarget.setAttribute('style', `height: ${evt.currentTarget.scrollHeight}px`);
      evt.currentTarget.classList.add('select--open');
    }
  }

  const onSubmit = async (values) => {
    setIsSubmitting(true);

    setTimeout(() => {
      setSucceeded(true);
    }, 2000)

    setTimeout(() => {
      setInitialValues(undefined);
      setIsSubmitting(false);
      setSucceeded(false);
      setIsApplying(false);
    }, 3000);
  };

  let filledValue = 691.15;

  if (optimalCabinets) {
    if (optimalCabinets.waste === 0) {
      filledValue = 0;
    } else {
      const wastePercent = Math.ceil((optimalCabinets?.waste * 100) / optimalCabinets?.totalArea);
      filledValue = Math.ceil((691.15 * wastePercent) / 100);
    }
  }

  return (
    <div className="modal no-scrollbar">
      <Formik
        initialValues={initialValues}
        onSubmit={onSubmit}
        validationSchema={validationSchema}
      >
        {({ values, setFieldValue, errors, touched }) => (
          <Form className="form container">
            <h2 className="form__title !mb-4 px-4">{text.title}</h2>
            <p className="w-[80%] font-light leading-none px-4 mt-0 mb-6">{text.description}</p>

            {!optimalCabinets && (
              <p className="text-sm text-red-400 px-4">{text.noCabinets}</p>
            )}

            <div className="md:grid md:grid-cols-2 md:gap-5 md:pr-4">
              <div className="flex flex-col md:gap-4">
                <label className="flex flex-col">
                  <span className="block text-xs mb-2 font-light pl-4">{text['field.employees.label']}</span>
                  <input
                    className="text-field mb-2"
                    type="number"
                    min={1}
                    value={values.employees}
                    onChange={(evt) => {
                      setFieldValue('employees', evt.target.value);
                      setOptimalCabinets(findOptimalCabinets(+evt.target.value, values.areaPerEmployee, values.room, K))
                    }}
                  />
                </label>

                <label className="flex flex-col">
                  <span className="block text-xs mb-2 font-light pl-4">{text['field.areaPerEmployee.label']}</span>
                  <div className={classNames('text-field select mb-2', errors.areaPerEmployee && touched.areaPerEmployee && '!border-red-400')} onClick={handleSelectClick}>
                    <button className={classNames('select__field', values.areaPerEmployee && '!text-khaki !font-normal')} type="button">
                      {text['options']?.find(({ value }) => value === values.areaPerEmployee).label}
                    </button>

                    {text['options']?.filter((option) => option.value !== values.areaPerEmployee)
                      .map((option) => (
                        <button
                          key={option.value}
                          className="select__option"
                          type="button"
                          onClick={(evt) => {
                            setFieldValue('areaPerEmployee', option.value);
                            evt.target.closest('div').removeAttribute('style');
                            evt.target.closest('div').classList.remove('select--open');
                            setOptimalCabinets(findOptimalCabinets(values.employees, option.value, values.room, K))
                          }}
                        >
                          {option.label}
                        </button>
                      ))}
                  </div>
                </label>

                <label className="flex flex-col">
                  <span className="block text-xs mb-2 font-light pl-4">{text['field.rooms.label']}</span>

                  <div className="text-field mb-2 justify-between !px-0">
                    <button
                      className="flex h-full border-none bg-transparent cursor-pointer items-center px-4"
                      type="button"
                      onClick={() => {
                        if (values.room > 1) {
                          setFieldValue('room', values.room - 1);
                          setOptimalCabinets(findOptimalCabinets(values.employees, values.areaPerEmployee, (values.room - 1), K))
                        }
                      }}
                    >
                      <svg width={12} height={4} viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fillRule="evenodd" clipRule="evenodd" d="M10.6001 0.25H1.39984C0.62688 0.25 0 1.03344 0 2C0 2.96656 0.62688 3.75 1.39984 3.75H10.6001C11.3731 3.75 12 2.96656 12 2C12 1.03357 11.3731 0.25 10.6001 0.25Z" fill="#D9D9D9" />
                      </svg>
                    </button>

                    {values.room}

                    <button
                      className="flex h-full border-none bg-transparent cursor-pointer items-center px-4"
                      type="button"
                      onClick={() => {
                        setFieldValue('room', values.room + 1);
                        setOptimalCabinets(findOptimalCabinets(values.employees, values.areaPerEmployee, (values.room + 1), K))
                      }}
                    >
                      <svg width={12} height={12} viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fillRule="evenodd" clipRule="evenodd" d="M7.5 4.5H10.8494C11.4847 4.5 12 5.36438 12 5.99992C12 6.63545 11.4847 7.49984 10.8494 7.49984H7.5L7.5 10.8493C7.5 11.4849 6.63531 12 5.99996 12C5.3646 12 4.5 11.4849 4.5 10.8493L4.5 7.5H1.15064C0.515286 7.5 0 6.63562 0 6.00008C0 5.36455 0.515286 4.50016 1.15064 4.50016H4.5L4.5 1.15066C4.5 0.515127 5.3646 0 5.99996 0C6.63531 0 7.5 0.515127 7.5 1.15066L7.5 4.5Z" fill="#D9D9D9" />
                      </svg>
                    </button>
                  </div>
                </label>

                <p className="mt-4 text-[18px] mb-6 pl-4 font-light md:mt-[44px] md:flex md:items-center">
                  <span className="md:inline-block md:max-w-[160px]">{text['recommended']}</span>
                  <span className="pl-2">~ {values.areaPerEmployee} м<sup className="text-xs">2</sup></span>
                </p>
              </div>

              <div className="md:mt-6">
                <svg className="flex mx-auto mb-4 rotate-90 scale-x-[-1] md:mb-12" viewBox="0 0 268 268" width={268} height={268}>
                  <circle cx={134} cy={134} r={133} fill="transparent" stroke="#d9d9d9" strokeWidth={1} />
                  <circle cx={134} cy={134} r={84} fill="transparent" stroke="#d9d9d9" strokeWidth={1} />
                  <circle id="progress-ring" cx={134} cy={134} r={108.5} fill="transparent" stroke="#d9d9d9" strokeOpacity="20%" strokeWidth={48} strokeDasharray="691.15" strokeDashoffset={filledValue} />
                </svg>

                <div className="flex justify-between text-xs mb-6 px-4 md:flex-col md:w-max md:items-end md:mx-auto md:gap-2 md:px-0">
                  <div className="flex gap-2 items-center font-light leading-none max-w-[112px] md:max-w-none">
                    {text.openspace}
                    <div className="flex items-center justify-center min-w-11 h-7 border border-platinum rounded-sm bg-platinum/20">
                      {values.areaPerEmployee} m<sup>2</sup>
                    </div>
                  </div>

                  <div className="flex gap-2 items-center font-light leading-none">
                    {text['field.rooms.label']}: {optimalCabinets?.adjustedCabinets}
                    <div className="flex items-center justify-center w-11 h-7 border border-platinum rounded-sm">
                      {optimalCabinets?.totalArea} m<sup>2</sup>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {!isApplying && (
              <button className="form__submit !mb-0" type="button" onClick={() => setIsApplying(true)}>
                {text.apply}
              </button>
            )}

            {isApplying && (
              <div>
                <p className="form__title px-4 !my-6">{text['apply.title']}</p>
                <p className="w-[80%] font-light leading-none px-4 !mt-0 mb-12">{text['apply.description']}</p>
                <input
                  className={classNames('text-field mb-2', errors.name && touched.name && '!border-red-400')}
                  type="text"
                  placeholder={`${text['field.name.label']} *`}
                  value={values.name}
                  onChange={(evt) => setFieldValue('name', evt.target.value)}
                />
                {errors.name && touched.name && (
                  <span className="relative -top-2 pl-4 text-red-400 text-sm">{errors.name}</span>
                )}

                <input
                  className={classNames('text-field mb-2', errors.surname && touched.surname && '!border-red-400')}
                  type="text"
                  placeholder={`${text['field.surname.label']} *`}
                  value={values.surname}
                  onChange={(evt) => setFieldValue('surname', evt.target.value)}
                />
                {errors.surname && touched.surname && (
                  <span className="relative -top-2 pl-4 text-red-400 text-sm">{errors.surname}</span>
                )}

                <input
                  className={classNames('text-field mb-2', errors.tel && touched.tel && '!border-red-400')}
                  type="tel"
                  placeholder={`${text['field.tel.label']}`}
                  value={values.tel}
                  onChange={(evt) => setFieldValue('tel', evt.target.value)}
                />
                {errors.tel && touched.tel && (
                  <span className="relative -top-2 pl-4 text-red-400 text-sm">{errors.tel}</span>
                )}

                <input
                  className={classNames('text-field mb-6', errors.email && touched.email && '!border-red-400')}
                  type="email"
                  placeholder={`${text['field.email.label']}`}
                  value={values.email}
                  onChange={(evt) => setFieldValue('email', evt.target.value)}
                />
                {errors.email && touched.email && (
                  <span className="relative -top-2 pl-4 text-red-400 text-sm">{errors.email}</span>
                )}

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

                <p className="text-xs leading-none m-0 font-light px-4" dangerouslySetInnerHTML={{ __html: text.warning }}></p>
              </div>
            )}

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

export default Calculation;
