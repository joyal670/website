import{f as e,a as i,g as p}from"./links.3e8e8c78.js";import n from"./AdditionalInformation.9f2bbdbc.js";import m from"./Category.fbf9f5de.js";import s from"./Features.838b7835.js";import a from"./Import.346ddeea.js";import c from"./LicenseKey.d79ac41f.js";import u from"./SearchAppearance.2db31719.js";import l from"./SmartRecommendations.62b004e3.js";import f from"./Success.183bf1a0.js";import d from"./Welcome.b8e15784.js";import{b as S,y as _,o as h}from"./vue.runtime.esm-bundler.c7867100.js";import{_ as g}from"./_plugin-vue_export-helper.8da217d5.js";import"./default-i18n.3881921e.js";import"./isArrayLikeObject.ab8f4241.js";import"./Wizard.306c9c62.js";import"./addons.de5dcd6e.js";import"./upperFirst.7faab9f8.js";import"./_stringToArray.4de3b1f3.js";import"./toString.7b877a36.js";import"./Index.2d18af70.js";import"./Caret.111317e1.js";import"./MaxCounts.12b45bab.js";import"./Phone.6ee2a475.js";import"./preload-helper.27958db9.js";import"./RadioToggle.93a1ca7d.js";import"./ImageUploader.828c36b4.js";import"./Img.67946138.js";import"./index.3770af44.js";import"./Plus.a14cb220.js";import"./SocialProfiles.111c980a.js";import"./Checkbox.7c6e2d91.js";import"./Checkmark.881c08fd.js";import"./Textarea.4d7a1c70.js";import"./SettingsRow.16d577c1.js";import"./Row.de10a580.js";import"./Twitter.93e0ac25.js";import"./Header.b0d812ce.js";import"./Logo.4a9ea46c.js";import"./Steps.f0c8c8b4.js";import"./HighlightToggle.96dc99f9.js";import"./HtmlTagsEditor.4e261f11.js";import"./tags.8d8fc490.js";import"./Editor.ac9af125.js";import"./UnfilteredHtml.ee1ceab1.js";import"./ImageSeo.1065e4e9.js";import"./ProBadge.7dd200c8.js";import"./popup.6fe74774.js";import"./params.f0608262.js";import"./Tags.00dc0d3a.js";import"./postSlug.bc0ca969.js";import"./metabox.28a7781e.js";import"./cleanForSlug.cc6d9d47.js";import"./_baseTrim.8725856f.js";import"./get.038a6445.js";import"./GoogleSearchPreview.0cba3d48.js";import"./PostTypeOptions.9e6fa4db.js";import"./Tooltip.216f85ac.js";import"./Book.946f7380.js";import"./VideoCamera.bed9a49d.js";const y={setup(){return{licenseStore:e(),optionsStore:i(),setupWizardStore:p()}},components:{AdditionalInformation:n,Category:m,Features:s,Import:a,LicenseKey:c,SearchAppearance:u,SmartRecommendations:l,Success:f,Welcome:d},methods:{deleteStage(t){const o=this.setupWizardStore.stages.findIndex(r=>t===r);o!==-1&&this.setupWizardStore.stages.splice(o,1)}},mounted(){if(this.optionsStore.internalOptions.internal.wizard){const t=JSON.parse(this.optionsStore.internalOptions.internal.wizard);delete t.currentStage,delete t.stages,delete t.licenseKey,this.setupWizardStore.loadState(t)}this.setupWizardStore.shouldShowImportStep||this.deleteStage("import"),this.licenseStore.isUnlicensed||this.deleteStage("license-key"),this.$isPro&&this.deleteStage("smart-recommendations")}};function z(t,o,r,x,W,$){return h(),S(_(t.$route.name))}const kt=g(y,[["render",z]]);export{kt as default};
