images_dir = www/bilder
images = $(wildcard $(images_dir)/*.jpg)
widths = 234px 472px 960px

.PHONY: all
all: $(widths)

.PHONY: clean
clean:
	rm -rf $(wildcard $(images_dir)/*px/*.jpg) $(wildcard $(images_dir)/*px)

define width_targets
$(foreach image,$(images),$(images_dir)/$(1)/$(notdir $(image)))
endef

define width_template
.PHONY: $(1)
$(1): $$(call width_targets,$(1))

$(images_dir)/$(1)/%.jpg: $(images_dir)/%.jpg | $(images_dir)/$(1)
	convert $$< -resize $(subst px,,$(1)) $$@

$(images_dir)/$(1):
	mkdir -p $$@
endef

$(foreach width,$(widths),$(eval $(call width_template,$(width))))
