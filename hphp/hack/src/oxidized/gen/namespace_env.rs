// Copyright (c) Facebook, Inc. and its affiliates.
//
// This source code is licensed under the MIT license found in the
// LICENSE file in the "hack" directory of this source tree.
//
// @generated SignedSource<<24f89e382b1ca862105a76e70ddfabd1>>
//
// To regenerate this file, run:
//   hphp/hack/src/oxidized/regen.sh

use ocamlrep_derive::OcamlRep;
use ocamlvalue_macro::Ocamlvalue;

use crate::s_map;

#[derive(Clone, Debug, OcamlRep, Ocamlvalue)]
pub struct Env {
    pub ns_uses: s_map::SMap<String>,
    pub class_uses: s_map::SMap<String>,
    pub record_def_uses: s_map::SMap<String>,
    pub fun_uses: s_map::SMap<String>,
    pub const_uses: s_map::SMap<String>,
    pub name: Option<String>,
    pub auto_ns_map: Vec<(String, String)>,
    pub is_codegen: bool,
}
