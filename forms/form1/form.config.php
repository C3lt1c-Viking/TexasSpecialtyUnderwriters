<?php namespace JF;


class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-38d657",
    "email": {
        "to": "b10h4ck3r20@gmail.com",
        "cc": "",
        "bcc": "",
        "subject": "Contractors Commercial General Libaility Application",
        "template": ""
    },
    "admin": {
        "users": "admin:6099b",
        "dataDelivery": "emailAndFile"
    },
    "thankyou": {
        "url": "",
        "message": "",
        "seconds": "10"
    },
    "autoResponse": {
        "includeAttachments": true,
        "subject": "",
        "template": ""
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "local",
    "smtp": {
        "host": "",
        "user": "",
        "password": ""
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "black"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [],
    "fields": [
        {
            "label": "Agent Agency",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "fullname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "",
                "addon": {
                    "leftIcon": "fa fa-users"
                }
            },
            "id": "f1",
            "cid": "c1"
        },
        {
            "label": "Agent Name:",
            "field_type": "name",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "sender": "fullname",
                "validators": {
                    "required": {
                        "enabled": true
                    },
                    "minlength": {
                        "enabled": false
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "id": "f8",
            "cid": "c52"
        },
        {
            "label": "Agent Phone:",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "sender": false,
                "placeholder": "xxx-xxx-xxxx",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": true,
                        "val": "[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}",
                        "msg": "Invalid phone number"
                    },
                    "required": {
                        "enabled": true
                    }
                }
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N"
            },
            "id": "f9",
            "cid": "c57"
        },
        {
            "label": "Applicant Name:",
            "field_type": "name",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "sender": "fullname",
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "id": "f12",
            "cid": "c76"
        },
        {
            "label": "Mailing Address:",
            "field_type": "address",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "labelHide": false,
            "gMapApiKey": "AIzaSyCyKEcGKyJrw2nZm_KyznqIa3ckOXR1b04",
            "gaCompleteEnabled": true,
            "gaCountryRestrictions": "",
            "gaPostalCodeRestrictions": "",
            "gaLanguage": "",
            "showLabel": false,
            "showPlaceholder": true,
            "showDescription": false,
            "subfields": {
                "addressLine1": {
                    "order": 1,
                    "label": "Address Line1",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "street_number route",
                        "gAddressName": "long_name",
                        "placeholder": "1234 Main St.",
                        "description": "Street address, P.O. box, company name, c\/o",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "addressLine2": {
                    "order": 2,
                    "label": "Address Line2",
                    "field_options": {
                        "enabled": false,
                        "placeholder": "Unit 1234",
                        "description": "Apartment, suite, unit, building, floor, etc.",
                        "validators": {
                            "required": {
                                "enabled": false,
                                "msg": ""
                            }
                        }
                    }
                },
                "city": {
                    "order": 3,
                    "label": "City",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "locality",
                        "gAddressName": "long_name",
                        "placeholder": "City",
                        "description": "City",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "state": {
                    "order": 4,
                    "label": "State \/ Province \/ Region",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "administrative_area_level_1",
                        "gAddressName": "long_name",
                        "placeholder": "State \/ Province \/ Region",
                        "description": "State \/ Province \/ Region",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "postalCode": {
                    "order": 5,
                    "label": "Postal \/ Zip Code",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "postal_code",
                        "gAddressName": "long_name",
                        "placeholder": "Postal \/ Zip Code",
                        "description": "Postal \/ Zip Code",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "country": {
                    "order": 6,
                    "label": "Country",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "country",
                        "gAddressName": "long_name",
                        "placeholder": "Country",
                        "description": "Country",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                }
            },
            "id": "f13",
            "cid": "c81"
        },
        {
            "label": "Applicant Is:",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Individual",
                        "checked": false
                    },
                    {
                        "label": "Partnership",
                        "checked": false
                    },
                    {
                        "label": "LLC",
                        "checked": false
                    },
                    {
                        "label": "Corporation",
                        "value": null,
                        "checked": null
                    },
                    {
                        "label": "Other",
                        "value": null,
                        "checked": null
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false,
                "addon": {
                    "leftIcon": "fa fa-suitcase"
                }
            },
            "id": "f10",
            "cid": "c65"
        },
        {
            "label": "Other Corporation Type:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-lock"
                }
            },
            "id": "f15",
            "cid": "c92"
        },
        {
            "label": "Policy From Date:",
            "field_type": "date",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "addon": {
                    "rightIcon": "glyphicon glyphicon-th",
                    "rightText": ""
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f14",
            "cid": "c86"
        },
        {
            "label": "Policy To Date:",
            "field_type": "date",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "addon": {
                    "rightIcon": "glyphicon glyphicon-th",
                    "rightText": ""
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f16",
            "cid": "c98"
        },
        {
            "label": "Location Address:",
            "field_type": "address",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "labelHide": false,
            "gMapApiKey": "AIzaSyCyKEcGKyJrw2nZm_KyznqIa3ckOXR1b04",
            "gaCompleteEnabled": true,
            "gaCountryRestrictions": "",
            "gaPostalCodeRestrictions": "",
            "gaLanguage": "",
            "showLabel": false,
            "showPlaceholder": true,
            "showDescription": false,
            "subfields": {
                "addressLine1": {
                    "order": 1,
                    "label": "Address Line1",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "street_number route",
                        "gAddressName": "long_name",
                        "placeholder": "1234 Main St.",
                        "description": "Street address, P.O. box, company name, c\/o",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "addressLine2": {
                    "order": 2,
                    "label": "Address Line2",
                    "field_options": {
                        "enabled": false,
                        "placeholder": "Unit 1234",
                        "description": "Apartment, suite, unit, building, floor, etc.",
                        "validators": {
                            "required": {
                                "enabled": false,
                                "msg": ""
                            }
                        }
                    }
                },
                "city": {
                    "order": 3,
                    "label": "City",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "locality",
                        "gAddressName": "long_name",
                        "placeholder": "City",
                        "description": "City",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "state": {
                    "order": 4,
                    "label": "State \/ Province \/ Region",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "administrative_area_level_1",
                        "gAddressName": "long_name",
                        "placeholder": "State \/ Province \/ Region",
                        "description": "State \/ Province \/ Region",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "postalCode": {
                    "order": 5,
                    "label": "Postal \/ Zip Code",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "postal_code",
                        "gAddressName": "long_name",
                        "placeholder": "Postal \/ Zip Code",
                        "description": "Postal \/ Zip Code",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                },
                "country": {
                    "order": 6,
                    "label": "Country",
                    "field_options": {
                        "enabled": true,
                        "gAddressTypes": "country",
                        "gAddressName": "long_name",
                        "placeholder": "Country",
                        "description": "Country",
                        "validators": {
                            "required": {
                                "enabled": true,
                                "msg": "This field is required."
                            }
                        }
                    }
                }
            },
            "id": "f17",
            "cid": "c103"
        },
        {
            "label": "Fully Describe Applicant's Operations:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": [],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f18",
            "cid": "c108"
        },
        {
            "label": "Describe Special Equipment Used:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": [],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f19",
            "cid": "c113"
        },
        {
            "label": "Gross Reciepts:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": [],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f21",
            "cid": "c124"
        },
        {
            "label": "Full Time Staff:",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "1-10",
                        "checked": false
                    },
                    {
                        "label": "11-20",
                        "checked": false
                    },
                    {
                        "label": "21-30",
                        "checked": false
                    },
                    {
                        "label": "31-40",
                        "value": null,
                        "checked": null
                    },
                    {
                        "label": "41-50",
                        "value": null,
                        "checked": null
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "id": "f20",
            "cid": "c118"
        },
        {
            "label": "Full Time Payroll:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": [],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f25",
            "cid": "c144"
        },
        {
            "label": "Part Time Staff:",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "0-10",
                        "checked": false
                    },
                    {
                        "label": "11-20",
                        "checked": false
                    },
                    {
                        "label": "21-30",
                        "checked": false
                    },
                    {
                        "label": "31-40",
                        "value": null,
                        "checked": null
                    },
                    {
                        "label": "41-50",
                        "value": null,
                        "checked": null
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "id": "f23",
            "cid": "c134"
        },
        {
            "label": "Part Time Payroll:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": [],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f24",
            "cid": "c139"
        },
        {
            "label": "Owners Payroll:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": [],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f27",
            "cid": "c156"
        },
        {
            "label": "Operations Out of State:",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "Yes",
                        "checked": false
                    },
                    {
                        "label": "No",
                        "checked": false
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "id": "f28",
            "cid": "c161"
        },
        {
            "label": "Describe:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f29",
            "cid": "c166"
        },
        {
            "label": "Years In Business:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": [],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f30",
            "cid": "c171"
        },
        {
            "label": "Prior Years of Experience in Set Field:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": [],
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f31",
            "cid": "c176"
        },
        {
            "label": "Prior Carrier Information: Year 1",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f32",
            "cid": "c181"
        },
        {
            "label": "Prior Carrier Information Company:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f33",
            "cid": "c188"
        },
        {
            "label": "Prior Carrer Information Premium:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f34",
            "cid": "c193"
        },
        {
            "label": "Prior Carrier Information Incurred Losses:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f35",
            "cid": "c200"
        },
        {
            "label": "Prior Carrier Information No. of Losses:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f36",
            "cid": "c205"
        },
        {
            "label": "Prior Carrier Information Year 2:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": [],
                "validators": {
                    "required": {
                        "enabled": false
                    }
                }
            },
            "id": "f37",
            "cid": "c212"
        },
        {
            "label": "Prior Carrier Information Company:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f39",
            "cid": "c224"
        },
        {
            "label": "Prior Carrier Information Premium:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f38",
            "cid": "c219"
        },
        {
            "label": "Prior Carrier Information Incurred Losses:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f40",
            "cid": "c230"
        },
        {
            "label": "Prior Carrier Information No. of Losses:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f41",
            "cid": "c237"
        },
        {
            "label": "Prior Carrier Information Year 3:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f42",
            "cid": "c244"
        },
        {
            "label": "Prior Carrier Information Company:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f43",
            "cid": "c249"
        },
        {
            "label": "Prior Carrier Information Premium:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f44",
            "cid": "c254"
        },
        {
            "label": "Prior Carrier Incurred Losses:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f45",
            "cid": "c259"
        },
        {
            "label": "Prior Carrier No. of Losses:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f46",
            "cid": "c264"
        },
        {
            "label": "Description of Operation & Classification:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f47",
            "cid": "c269"
        },
        {
            "label": "Limit of Liability:",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Select -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "$100,000",
                        "checked": false
                    },
                    {
                        "label": "$300,000",
                        "checked": false
                    },
                    {
                        "label": "$500,000",
                        "checked": false
                    },
                    {
                        "label": "$1,000,000",
                        "value": null,
                        "checked": null
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "id": "f48",
            "cid": "c274"
        },
        {
            "label": "Other Limit of Liability:",
            "field_type": "text",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "size": "small",
                "addon": []
            },
            "id": "f49",
            "cid": "c279"
        },
        {
            "label": "Applicant Signature:",
            "field_type": "signature",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "signature": {
                "labelClear": "Clear",
                "width": "310",
                "height": "120"
            },
            "id": "f51",
            "cid": "c289"
        },
        {
            "label": "Signing Date:",
            "field_type": "date",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "addon": {
                    "rightIcon": "glyphicon glyphicon-th",
                    "rightText": ""
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                }
            },
            "id": "f52",
            "cid": "c294"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "page": {
                    "title": "Submit",
                    "labelPrev": "< Back",
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                },
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "",
                "icon": "",
                "checkRequiredFields": ""
            },
            "id": "f0",
            "cid": "c0"
        }
    ],
    "gdpr": {
        "consentFieldId": "",
        "saveData": "always"
    },
    "licenseKey": "",
    "twilio": {
        "toPhone": "2542213846"
    }
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class
