var postcodes = [3000, 3000, 3001, 3002, 3003, 3003, 3005, 3006, 3008, 3010, 3011, 3012, 3013, 3015, 3016, 3018, 3019, 3020, 3025, 3026, 3027, 3028, 3031, 3032, 3033, 3034, 3036, 3039, 3040, 3041, 3042, 3043, 3044, 3045, 3046, 3047, 3048, 3049, 3050, 3051, 3052, 3053, 3054, 3055, 3056, 3057, 3058, 3060, 3065, 3066, 3067, 3068, 3070, 3071, 3072, 3073, 3074, 3075, 3078, 3079, 3081, 3083, 3084, 3085, 3086, 3087, 3088, 3093, 3094, 3101, 3102, 3103, 3104, 3105, 3106, 3107, 3108, 3109, 3111, 3121, 3122, 3123, 3124, 3125, 3126, 3127, 3128, 3130, 3141, 3142, 3143, 3144, 3145, 3146, 3147, 3148, 3149, 3161, 3162, 3163, 3165, 3166, 3167, 3168, 3181, 3182, 3183, 3184, 3185, 3186, 3187, 3188, 3189, 3190, 3191, 3192, 3193, 3194, 3195];

function clearPostcodeResults() {
  jQuery('.results').hide();
  jQuery('.postcode-error').hide();
  jQuery('.affirmative').hide();
  jQuery('.negative').hide();
  jQuery('.input--postcode').removeClass('warning-border');
  jQuery('.postcode-error h5').removeClass('warning-text');
}

jQuery('.input--postcode').click(function(){
  clearPostcodeResults();
})

jQuery('.button').click(function(){
  clearPostcodeResults();
  var input = jQuery('.input--postcode').val();
  var string = /[a-zA-Z]/;
  var digits = /^[0-9]+$/;
  var containsLetters = string.test(input);
  var postcode = parseInt(input);
  var empty = input === '';
  var tooShort = (postcode / 1000) < 1;
  if (empty || tooShort || containsLetters) {
    jQuery('.results').show();
    jQuery('.input--postcode').addClass('warning-border');
    jQuery('.postcode-error h5').addClass('warning-text');
    jQuery('.postcode-error').show();
    console.log('error');
    return;
  }

  var validPostcode = postcodes.indexOf(postcode) >= 0 ? true : false;
  if (validPostcode) {
    jQuery('.results').show();
    jQuery('.affirmative').show();
  } else {
    jQuery('.results').show();
    jQuery('.negative').show();
  }
})