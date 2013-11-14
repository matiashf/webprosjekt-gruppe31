images_dir = www/bilder
images = $(wildcard $(images_dir)/*.jpg)
widths = 234px 472px 960px
json_file = www/js/image-optimizer.json

# Idea for join method from http://stackoverflow.com/a/9551487
space :=
space +=
comma = ,
join-with-comma = $(subst $(space),$(comma),$(strip $1))

define width_targets
$(foreach image,$(images),$(images_dir)/$(1)/$(notdir $(image)))
endef

.PHONY: all
all: $(json_file)

$(json_file): $(foreach w,$(widths),$(call width_targets,$(w)))
	echo "{ \"widths\": [$(call join-with-comma,$(foreach w,$(widths),$(subst px,,$(w))))] }" > $@

.PHONY: clean
clean:
	rm -rf $(wildcard $(images_dir)/*px/*.jpg) $(wildcard $(images_dir)/*px) $(json_file)

define width_template
.PHONY: $(1)
$(1): $$(call width_targets,$(1))

$(images_dir)/$(1)/%.jpg: $(images_dir)/%.jpg | $(images_dir)/$(1)
	convert $$< -resize $(subst px,,$(1)) -quality 70 $$@

$(images_dir)/$(1):
	mkdir -p $$@
endef

$(foreach width,$(widths),$(eval $(call width_template,$(width))))
